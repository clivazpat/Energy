<?php

namespace Energy\App\Controller;

use Energy\Library\Mvc\Controller;

class ControllerEnergies extends Controller
{
    public function pv()
    {
        return $this->view->Render();
    }

    public function windturbine()
    {
        return $this->view->Render();
    }

    public function minihydraulic()
    {
        return $this->view->Render();
    }

    public function biogas()
    {
        return $this->view->Render();
    }
}