<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        return <<<php
<a href="/">Главная</a>
<a href="/test1">Test1</a>
<a href="/test3">Test2</a>
<h1>Добро пожаловать Admin!</h1>
php;
    }

    public function test1() {
        return <<<php
<a href="/">Главная</a>
<a href="/admin">Админка</a>
<h2>Test1</h2>
php;
    }

    public function test3()
    {
        return <<<php
<a href="/">Главная</a>
<a href="/admin">Админка</a>
<h2>Test3</h2>
php;
    }
}
