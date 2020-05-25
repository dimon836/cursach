<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SomeController extends Controller {
    public function getSome($id){
        return "Hello $id";
    }
}

