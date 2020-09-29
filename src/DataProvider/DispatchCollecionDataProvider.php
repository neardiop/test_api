<?php
// api/src/DataProvider/DispatchCollectionDataProvider.php

namespace App\DataProvider\DispatchCollectionDataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Repository\DispatchRepository;
use App\Entity\Dispatch;
use Symfony\Component\HttpFoundation\RequestStack;

final class DispatchCollectionDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    private $dispatchRepository;
    private $request;
    /**
     * UserDataProvider constructor.
     */
    public function __construct(DispatchRepository $dispatchRepository,RequestStack $request)
    {
        $this->dispatchRepository = $dispatchRepository;
        $this->request = $request;
    }
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Dispatch::class === $resourceClass;
    }

    public function getCollection(string $resourceClass, string $operationName = null)
    {
        // Retrieve the blog post collection from somewhere
        return $this->dispatchRepository->getAll($this->request);
    }
}