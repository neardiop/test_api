<?php

namespace App\Doctrine;

use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\QueryCollectionExtensionInterface;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\QueryItemExtensionInterface;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Util\QueryNameGeneratorInterface;
use App\Entity\StatistiqueClient;
use App\Entity\StatistiqueClientPoints;
use App\Entity\StatistiqueDestinataire;
use App\Entity\StatistiqueDestinatairePoints;
use App\Entity\StatistiqueHeureMoyenneDst;
use App\Entity\StatistiqueHeureMoyenneDstTournee;
use App\Entity\StatistiqueTournee;
use App\Entity\StatistiqueTourneeDestinataires;
use App\Entity\StatistiqueTourneePoints;
use App\Entity\NumeroTournee;
use Doctrine\ORM\QueryBuilder;
use DoctrineExtensions\Query\Mysql\DateSub;
use DoctrineExtensions\Query\Mysql\Month;
use DoctrineExtensions\Query\Mysql\Now;
use Symfony\Component\Security\Core\Security;

final class CurrentMonthExtension implements QueryCollectionExtensionInterface, QueryItemExtensionInterface
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function applyToCollection(QueryBuilder $queryBuilder, QueryNameGeneratorInterface $queryNameGenerator, string $resourceClass, string $operationName = null): void
    {
        $this->addWhere($queryBuilder, $resourceClass);
    }

    public function applyToItem(QueryBuilder $queryBuilder, QueryNameGeneratorInterface $queryNameGenerator, string $resourceClass, array $identifiers, string $operationName = null, array $context = []): void
    {
        $this->addWhere($queryBuilder, $resourceClass);
    }

    private function addWhere(QueryBuilder $queryBuilder, string $resourceClass): void
    {
        if (
            $resourceClass === StatistiqueClient::class || $resourceClass === StatistiqueTournee::class ||
            $resourceClass === StatistiqueClientPoints::class || $resourceClass === StatistiqueDestinataire::class ||
            $resourceClass === StatistiqueTourneePoints::class || $resourceClass === StatistiqueHeureMoyenneDst::class ||
            $resourceClass === StatistiqueHeureMoyenneDstTournee::class || $resourceClass === StatistiqueDestinatairePoints::class ||
            $resourceClass === StatistiqueTourneeDestinataires::class
        ) {
            $rootAlias = $queryBuilder->getRootAliases()[0];

            //Get current month
            $current_month = date('m');

            //Get moth of yesterday
            $date = date_create(date('Y-m-d H:i:s'));
            date_sub($date, date_interval_create_from_date_string("1 days"));
            $month_of_yesterday = date("m", strtotime(date_format($date, "Y-m-d")));

            if ($current_month == $month_of_yesterday) {
                $queryBuilder->andWhere(sprintf("MONTH(%s.date_livraison) = MONTH(DATE_SUB(CURRENT_DATE(), 1, 'day'))", $rootAlias))
                    ->andWhere(sprintf("YEAR(%s.date_livraison) = YEAR(CURRENT_DATE())", $rootAlias));
            } else {
                $queryBuilder->andWhere(sprintf("MONTH(%s.date_livraison) = MONTH(DATE_SUB(CURRENT_DATE(), 2, 'day'))", $rootAlias))
                    ->andWhere(sprintf("YEAR(%s.date_livraison) = YEAR(CURRENT_DATE())", $rootAlias));
            }
        }
    }
}
