<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {
        return view('inv.inventory');
    }

    public function create(): view{
        return view('inv.create');
    }
}
