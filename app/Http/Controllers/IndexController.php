<?php

namespace App\Http\Controllers;

use App\Models\ObjectModel;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View {
        $objects = ObjectModel::get([
            'id',
            'name',
            'value'
        ]);

        return view('dashboard', [
            'objects' => $objects
        ]);
    }

}
