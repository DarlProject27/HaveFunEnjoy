<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelcontroller extends Controller {
    public function artikel() {
        return view('artikel.artikel');
    }
}
