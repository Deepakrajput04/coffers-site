<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\About;

use App\models\Offer;


class ApiController extends Controller
{
    public function abouts($id = null)
    {
        return $id?about::find($id):About::all();
    }
    public function offer($id = null)
    {
        return $id?offer::find($id):Offer::all();
    }
}
