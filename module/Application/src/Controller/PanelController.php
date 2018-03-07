<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
use Application\Model\PanelModel;

class PanelController extends AbstractRestfulController
{
    /**
    * The PanelModel class
    *
    * @var PanelModel
    */
    private $PanelModel;

    public function __construct()
    {
        $this->PanelModel = new PanelModel();
    }

    private function notFound()
    {
        $this->getResponse()->setStatusCode(404);
        return new JsonModel([
            'message' => 'Not found'
        ]);
    }

    /**
   * Gets the panel associated with the id and returns a JsonModel if found
   *
   * @param int $id The id associated with the panel
   */
    public function get($id)
    {
        $panelsFound = $this->PanelModel->getById($id);
        if ($panelsFound) {
            return new JsonModel([
                'panel' => array_values($panelsFound)[0]
            ]);
        }
        else {
            return $this->notFound();
        }
    }
}
