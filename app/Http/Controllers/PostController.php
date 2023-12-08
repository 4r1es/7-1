<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function show(Post $post)
    {
        dd($post);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    // $client = new \GuzzleHttp\Client();
    // $url = 'https://teratail.com/api/v1/questions';
    // $response = $client->request(
    //         'GET',
    //         $url,
    //         ['Bearer' => config('services.teratail.token')]
    //     );
    // $questions = json_decode($response->getBody(), true);
    // return view('posts.index')->with([
    //         'posts' => $post->getPaginateByLimit(),
    //         'questions' => $questions['questions'],
    //     ]);
}
?>