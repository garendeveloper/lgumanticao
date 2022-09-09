<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function get_all()
    {
        $data = Supplier::all();
        echo json_encode($data);
    }
}
