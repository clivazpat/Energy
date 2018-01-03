<?php

namespace Energy\App\Controller;

use Energy\Library\Mvc\Controller;

class ControllerIndex extends Controller
{
    public function index()
    {
        return $this->view->Render();
    }

    public function detail()
    {
        return $this->view->Render();
    }

}