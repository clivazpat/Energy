<?php
namespace Energy\Library\Mvc;

class View {

	public $viewPath;
	public $viewData;
	public $layoutPath;
	public $controller;
	public $currentController;
	public $currentAction;

    /**
     * View constructor.
     * @param $ctr  Controller actuel
     * @param $act  Action actuelle
     */
	public function __construct($ctr, $act) {
		$this->currentController = $ctr;
		$this->currentAction = $act;
		$this->viewData = array();
		$this->viewPath = APPPATH.DS.'view'.DS.$ctr.DS.'view-'.$act.'.php';
		$this->layoutPath = APPPATH.DS.'view'.DS.'_shared'.DS.'view-main.php';
	}

	public function SetController($ctr) {
		$this->controller = $ctr;
	}

    /**
     * Méthode permettant de passer une variable à la vue
     * @param $key      Nom de la variable
     * @param $value    Contenu de la variable
     */
	public function Set($key, $value) {
		$this->viewData[$key] = $value;
	}
	
	public function Uset($key) {
		unset($this->viewData[$key]);
	}
	
	public function SetView($path) {
		$this->viewPath = $path;
	}
	
	public function SetLayout($path) {
		$this->layoutPath = $path;
	}

    /**
     * Méthode permettant d'afficher la vue sans le layout
     */
	public function RenderPartial() {
		extract($this->viewData);
		ob_start();
		include($this->viewPath);
		return ob_get_clean();
	}
	
	public function Render() {
		$html = $this->RenderPartial();
		ob_start();
		include($this->layoutPath);
		return ob_get_clean();
	}
}