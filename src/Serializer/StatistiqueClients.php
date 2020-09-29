<?php
// api/src/Serializer/ApiNormalizer

namespace App\Serializer;

use App\Entity\StatistiqueClient;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerInterface;

final class StatistiqueClients implements NormalizerInterface, DenormalizerInterface, SerializerAwareInterface
{
    private $decorated;

    public function __construct(NormalizerInterface $decorated)
    {
        if (!$decorated instanceof DenormalizerInterface) {
            throw new \InvalidArgumentException(sprintf('The decorated normalizer must implement the %s.', DenormalizerInterface::class));
        }

        $this->decorated = $decorated;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->decorated->supportsNormalization($data, $format)
            && is_object($data) && $data instanceof StatistiqueClient;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        // Nombre demissionTaux Scans et respect delais par client
        $data = $this->decorated->normalize($object, $format, $context);
        if (is_array($data)) {
            $data_ = $data;
            $data = array();

            $data['missions_prevues'] = $data_['nombreMissionsPrevues'];
            $data['missions_enlevees'] = $data_['nombreMissionsEnlevees'];
            $data['missions_livrees'] = $data_['nombreMissionsLivrees'];

            $data['colis_prevus'] = $data_['nombreColisPrevus'];
            $data['colis_livres'] = $data_['nombreColisLivres'];
            $data['colis_livres_hors_delais'] = $data_['nombreColisLivresHorsDelais'];

            $data['date'] = $data_['dateLivraison'];

            if ($data_['nombreMissionsPrevues'] > 0) {
                $data['enlevement'] = $data_['nombreMissionsEnlevees'] * 100 / $data_['nombreMissionsPrevues'];
            }
            
            if ($data_['nombreMissionsEnlevees'] > 0) {
                $data['livraison'] = $data_['nombreMissionsLivrees'] * 100 / $data_['nombreMissionsEnlevees'];
            }

            if ($data_['nombreColisPrevus'] > 0) {
                $data['enlevement_colis'] = $data_['nombreColisEnleves'] * 100 / $data_['nombreColisPrevus'];
            }
            
            if ($data_['nombreColisEnleves'] > 0) {
                $data['livraison_colis'] = $data_['nombreColisLivres'] * 100 / $data_['nombreColisEnleves'];
            }
        }

        return $data;
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $this->decorated->supportsDenormalization($data, $type, $format);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        return $this->decorated->denormalize($data, $class, $format, $context);
        //return $data instanceof Clients;
    }

    public function setSerializer(SerializerInterface $serializer)
    {
        if ($this->decorated instanceof SerializerAwareInterface) {
            $this->decorated->setSerializer($serializer);
        }
    }
}
