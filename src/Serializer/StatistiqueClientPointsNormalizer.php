<?php

namespace App\Serializer;

use App\Entity\StatistiqueClientPoints;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class StatistiqueClientPointsNormalizer implements NormalizerInterface, DenormalizerInterface
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
        //Taux scans point par client
        $data = $this->normalizer->normalize($object, $format, $context);
        if (is_array($data)) {
            $data_ = $data;
            $data = array();
            $data['date'] = $data_['dateLivraison'];
            if ($data_['nombreMissionsPrevues'] != 0) {
                $data['enlevement'] = $data_['nombreMissionsEnlevees'] * 100 / $data_['nombreMissionsPrevues'];
            }
            if ($data_['nombreMissionsEnlevees'] != 0) {
                $data['livraison'] = $data_['nombreMissionsLivrees'] * 100 / $data_['nombreMissionsEnlevees'];
            }
        }

        return $data;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->normalizer->supportsNormalization($data, $format)
            && is_object($data) && $data instanceof StatistiqueClientPoints;
    }
}
