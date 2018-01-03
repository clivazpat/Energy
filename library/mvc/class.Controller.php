<?php
namespace Energy\Library\Mvc;

class Controller{

    protected $currentController;
    protected $currentAction;

    protected $model;
    public $view;

    /**
     * Controller constructor.
     * @param $currentController    Controller actuel
     * @param $currentAction        Action actuelle
     * @param $model                Model actuel
     * @param $view                 Vue actuelle
     */
    public function __construct($currentController, $currentAction, $model, $view){
        $this->currentController = $currentController;
        $this->currentAction = $currentAction;
        $this->model = $model;
        $this->view = $view;
    }

    public function getCurrentController() {
        return $this->currentController;
    }

    public function getCurrentAction() {
        return $this->currentAction;
    }
}