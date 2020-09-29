<?php

namespace App\Serializer;

use App\Entity\StatistiqueDestinataire;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class StatistiqueDestinatairesNormalizer implements NormalizerInterface, DenormalizerInterface
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
        
            $data['date'] = $data_['date_livraison'];
            $data['dst'] = $data_['nom'];
            $data['nb_enl'] = $data_['nombre_missions_enlevees'];
            $data['nb_liv'] = $data_['nombre_missions_livrees'];
            $data['nb_miss'] = $data_['nombre_missions_prevues'];
            if ($data_['nombre_colis_prevus'] == 0) {
                $data['taux'] = '0%';
            } else {
                $taux = round((($data_['nombre_colis_enleves_scan'] / $data_['nombre_colis_prevus']) * 100), 2);
                if ($taux > 100) {
                    $taux = 100;
                }
                $data['taux'] = $taux . "%";
            }
            if ($data_['nombre_missions_livrees'] > 0) {
                $data['heures'] = $data_['resultat'];
            } else {
                $data['heures'] = "Livraisons encore en attente";
            }
            if ($data_['nombre_colis_retardes_livraison'] > 0 || $data_['nombre_colis_retardes_enlevement'] > 0) {
                $data['retards'] = 'Afficher';
                if ($data_['nombre_colis_retardes_enlevement'] > 0) {
                    $data['couleur'] = 'retard-class';
                }
                if ($data_['nombre_colis_retardes_livraison'] > 0) {
                    $data['couleur'] = 'retard-liv-class';
                }
            } else {
                $data['retards'] = '';
                $data['couleur'] = 'normal-class';
            }
        }

        return $data;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->normalizer->supportsNormalization($data, $format)
            && is_object($data) && $data instanceof StatistiqueDestinataire;
    }
}
