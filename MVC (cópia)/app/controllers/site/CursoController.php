<?php

namespace app\controllers\site;

use app\controllers\ContainerController;

class CursoController extends ContainerController
{
    public function index()
    {

    }

    public function show($request)
    {
        $this->view([
            'title' => 'Curso',
            'curso' => 'php MVC'

        ], 'site.curso');
    }
}