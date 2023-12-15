<?php

// src/Controller/ApiController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\Document\Pays;

class ApiController extends AbstractController
{
    private $documentManager;

    public function __construct(DocumentManager $documentManager) {
         $this->documentManager = $documentManager;
    }

    #[Route('/pays', name: 'api_imports')]
    public function getImports(): Response
    {
        try {
            // Récupérer tous les enregistrements d'importation
            $importRecords = $this->documentManager->getRepository(Pays::class)->findAll();
            $data = [];
            foreach ($importRecords as $record) {
                $fields = $record->getFields();
                $data[] = [
                    'datasetId' => $record->getDatasetId(),
                    'recordId' => $record->getRecordId(),
                    'paysDorigineEn' => $fields ? $fields->getPaysDorigineEn() : null,
                    'paysDorigine' => $fields ? $fields->getPaysDorigine() : null,
                    'annee' => $fields ? $fields->getAnnee() : null,
                    'quantiteImporteeEnFranceTwh' => $fields ? $fields->getQuantiteImporteeEnFranceTwh() : null,
                    'recordTimestamp' => $record->getRecordTimestamp() ? $record->getRecordTimestamp()->format('c') : null,
                ];
            }
            var_dump($importRecords);
            return new JsonResponse($data);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
