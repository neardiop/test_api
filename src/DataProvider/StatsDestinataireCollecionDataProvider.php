<?php
// api/src/DataProvider/StatsDestinataireCollectionDataProvider.php

namespace App\DataProvider\StatsDestinataireCollectionDataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Repository\StatistiqueDestinataireRepository;
use App\Entity\StatistiqueDestinataire;
use App\Serializer\StatistiqueDestinatairesNormalizer;
use stdClass;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\SerializerAwareDataProviderInterface;
use ApiPlatform\Core\DataProvider\SerializerAwareDataProviderTrait;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;

final class StatsDestinataireCollectionDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    private $statsDestinataireRepository;
    private $request;
    private $statistiqueDestinatairesNormalizer;
    /**
     * UserDataProvider constructor.
     */
    public function __construct(StatistiqueDestinataireRepository $statsDestinataireRepository, RequestStack $request, StatistiqueDestinatairesNormalizer $statistiqueDestinatairesNormalizer)
    {
        $this->statsDestinataireRepository = $statsDestinataireRepository;
        $this->request = $request;
        $this->statistiqueDestinatairesNormalizer = $statistiqueDestinatairesNormalizer;
    }
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return StatistiqueDestinataire::class === $resourceClass;
    }

    public function getCollection(string $resourceClass, string $operationName = null)
    {
        // Retrieve the blog post collection from somewhere
        //return $this->statsDestinataireRepository->getAll();
        //$object = $this->statsDestinataireRepository->getAll();
        return $this->statsDestinataireRepository->getAll($this->request);
    }
}