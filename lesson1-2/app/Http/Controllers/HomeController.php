<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return <<<php
<a href="/">Главная</a>
<a href="/admin">Админка</a>
<h1>Добро пожаловать!</h1>
php;

    }

}
