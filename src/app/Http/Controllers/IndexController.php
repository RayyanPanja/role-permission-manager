<?php

namespace CodersHut\RolePermissionManager\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('rolePermissionManager::welcome');
    }
}
