<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SampleController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response =  $client->request("GET","https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706?applicationId=1021454656288471414&keyword=%E3%83%97%E3%83%AD%E3%83%86%E3%82%A4%E3%83%B3&sort=%2BitemPrice&genreId=100938&hits=3");

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        return view('samples.index', ["posts" => $posts]);
    }
}
