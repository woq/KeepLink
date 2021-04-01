<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class sango extends Controller {
    public function insertform(){
        return view('post');
    }

    public function insert(Request $request){
        $ip = $request->ip();
        $url = $request->post('url');
        $sanID = 'what';
        DB::insert('insert into sango (ip,url,sanID) values(?,?)',[$ip,$url,$sanID]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}

