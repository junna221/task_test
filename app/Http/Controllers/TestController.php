<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();
        //dd($values);
        return view('tests.test',compact('values'));

        //$tests = DB::select("select * from tests");
        //var_dump($tests);

        //$values = Test::all();
        //return view('tests.test',["values" => $values]);
    }
}
