<?php

namespace App\Serializer;

use App\Entity\StatistiqueTournee;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class StatistiqueTourneesNormalizer implements NormalizerInterface, DenormalizerInterface
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

            $data['missions_prevues'] = $data_['nombreMissionsPrevues'];
            $data['missions_enlevees'] = $data_['nombreMissionsEnlevees'];
            $data['missions_livrees'] = $data_['nombreMissionsLivrees'];

            $data['colis_prevus'] = $data_['nombreColisPrevus'];
            $data['colis_livres'] = $data_['nombreColisLivres'];
            $data['colis_livres_hors_delais'] = $data_['nombreColisRetardes'];

            $data['date'] = $data_['dateLivraison'];

            if ($data_['nombreMissionsPrevues'] != 0) {
                $data['enlevement'] = $data_['nombreMissionsEnlevees'] * 100 / $data_['nombreMissionsPrevues'];
            }
            if ($data_['nombreMissionsEnlevees'] != 0) {
                $data['livraison'] = $data_['nombreMissionsLivrees'] * 100 / $data_['nombreMissionsEnlevees'];
            }

            

            if ($data_['nombreColisPrevus'] > 0) {
                $data['enlevement_colis'] = $data_['nombreColisEnleves'] * 100 / $data_['nombreColisPrevus'];
            }
            
            if ($data_['nombreColisEnleves'] > 0) {
                $data['livraison_colis'] = $data_['nombreColisLivres'] * 100 / $data_['nombreColisEnleves'];
            }

            //$data[4]['name'] = 'Taux colis livres hors delais';
            //$data[4]['value'] = 100 - ($data_['nombreColisLivresHorsDelais'] * 100 / $data_['nombreColisLivres']);
            

        }

        return $data;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->normalizer->supportsNormalization($data, $format)
            && is_object($data) && $data instanceof StatistiqueTournee;
    }
}
