<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClientController extends Controller
{
    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        return $response->json();
        // json_decode($response, true);
        // return $response[3]['title'];
    }

    public function getPostById($id){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }

    public function addPost(){
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'Judul Baru',
            'body' => 'Ini adalah judul baru yang terbaru'
        ]);
        return $response->json();
    }

    public function updatePost(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'Update Title',
            'body' => 'Body baru yang sudah diupdate'
        ]);
        return $response->json();
    }

    public function deletePost($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
