<?php

namespace app\controllers\site;

use app\controllers\ContainerController;
use app\models\site\User;

class HomeController extends ContainerController
{
  public function index()
  {
    $user =  new User;
    $users = $user->all();

    $this->view([
      'title' => 'Users List',
      'users' => $users,
    ],
     'site.home');
  }
}