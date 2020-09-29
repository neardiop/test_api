<?php
// api/src/DataProvider/StatsDestinataireCollectionDataProvider.php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use stdClass;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\SerializerAwareDataProviderInterface;
use ApiPlatform\Core\DataProvider\SerializerAwareDataProviderTrait;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use App\Repository\StatistiqueTourneeDestinatairesRepository;
use App\Entity\StatistiqueTourneeDestinataires;

final class StatsTourneeDestinataireCollectionDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    private $statsTourneeDestinataireRepository;
    private $request;
    /**
     * UserDataProvider constructor.
     */
    public function __construct(StatistiqueTourneeDestinatairesRepository $statsTourneeDestinataireRepository, RequestStack $request)
    {
        $this->statsTourneeDestinataireRepository = $statsTourneeDestinataireRepository;
        $this->request = $request;
    }
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return StatistiqueTourneeDestinataires::class === $resourceClass;
    }

    public function getCollection(string $resourceClass, string $operationName = null)
    {
        // Retrieve the blog post collection from somewhere
        //return $this->statsDestinataireRepository->getAll();
        //$object = $this->statsDestinataireRepository->getAll();
        return $this->statsTourneeDestinataireRepository->getAll($this->request);
    }
}