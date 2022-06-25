<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use View;

class ConsumeJsonPlaceHolder extends Controller
{
    public function getUsers()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');

        $users = json_decode($response->body());
        return View::make('welcome')->with('users', $users);
    }

    public function getUser(int $idUser)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/$idUser");
        $user = json_decode($response->body());
        return View::make('user')->with('user', $user);
    }

    public function getPostCommentUser(int $idUser)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/$idUser/posts");
        $ps = json_decode($response->body());
        $posts = [];
        foreach ($ps as $post) {
            $comments = [];
            $response = Http::get("https://jsonplaceholder.typicode.com/post/$post->id/comments");
            $cms = json_decode($response->body());
            foreach ($cms as $comment) {
                $comments[] = [
                    'idComment' => $comment->id,
                    'name' => $comment->name,
                    'email' => $comment->email,
                    'body' => $comment->body
                ];
            }
            $posts[] = [
                'idPost' => $post->id,
                'title' => $post->title,
                'body' => $post->body,
                'comments' => $comments
            ];
        }

        return View::make('user_posts')->with('posts', $posts);
    }

    public function getAllTaks(int $idUser)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/$idUser/todos");
        $tasks = json_decode($response->body());
        return View::make('user_all')->with(['tasks' => $tasks, 'userId' => $idUser]);
    }

    public function getAllTaksAdd(int $idUser, Request $request)
    {
        $completed = false;
        if ($request->input('completed') != "") {
            $completed = true;
        }
        $response = Http::post('https://jsonplaceholder.typicode.com/todos', [
            "userId" => $idUser,
            "title" => $request->input('title'),
            "completed" => $completed,
        ]);
        if ($response->status() == 201) {
            return redirect()->route('tasks', ['id' => $idUser]);
        } else {
            dd($response);
        }
    }
}
