<?php

namespace App\Doctrine;

use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\QueryCollectionExtensionInterface;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\QueryItemExtensionInterface;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Util\QueryNameGeneratorInterface;
use App\Entity\Clients;
use App\Entity\StatistiqueClient;
use App\Entity\StatistiqueClientPoints;
use App\Entity\StatistiqueDestinataire;
use App\Entity\StatistiqueDestinatairePoints;
use App\Entity\StatistiqueHeureMoyenneDst;
use App\Entity\StatistiqueHeureMoyenneDstTournee;
use App\Entity\StatistiqueTournee;
use App\Entity\StatistiqueTourneeDestinataires;
use App\Entity\StatistiqueTourneePoints;
use Doctrine\ORM\QueryBuilder;
use DoctrineExtensions\Query\Mysql\DateSub;
use DoctrineExtensions\Query\Mysql\Month;
use DoctrineExtensions\Query\Mysql\Now;
use Symfony\Component\Security\Core\Security;

final class CurrentClientExtension implements QueryCollectionExtensionInterface, QueryItemExtensionInterface
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
        if (StatistiqueDestinataire::class !== $resourceClass || $this->security->isGranted('ROLE_ADMIN') || null === $client = $this->security->getUser()) {
            return;
        }

        $rootAlias = $queryBuilder->getRootAliases()[0];
        $queryBuilder->andWhere(sprintf('%s.clients = :current_user', $rootAlias));
        $queryBuilder->setParameter('current_user', 5);
    }
}
