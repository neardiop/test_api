<?php

namespace App\Serializer;

use App\Entity\StatistiqueTourneeRetards;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class StatistiqueTourneeRetardsNormalizer implements NormalizerInterface, DenormalizerInterface
{
    private $normalizer;

    public function __construct(NormalizerInterface $normalizer)
    {
        if (!$normalizer instanceof DenormalizerInterface) {
            throw new \InvalidArgumentException('The normalizer must implement the DenormalizerInterface');
        }

        $this->normalizer = $normalizer;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        return $this->normalizer->denormalize($data, $class, $format, $context);
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $this->normalizer->supportsDenormalization($data, $type, $format);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = $this->normalizer->normalize($object, $format, $context);
        if (is_array($data)) {
            $data_ = $data;
            $data = array();
            $data[0]['name'] = 'Enlevements';
            $data[1]['name'] = 'Livraisons';

            $data[0]['value'] = 100 - ($data_['nombreMissionsRetardeesEnlevement'] * 100 / $data_['nombreMissionsEnlevees']);
            $data[0]['date'] = $data_['dateLivraison'];
            $data[1]['value'] = 100 - ($data_['nombreMissionsRetardeesLivraison'] * 100 / $data_['nombreMissionsLivrees']);
            $data[1]['date'] = $data_['dateLivraison'];

        }

        return $data;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->normalizer->supportsNormalization($data, $format)
            && is_object($data) && $data instanceof StatistiqueTourneeRetards;
    }
}
