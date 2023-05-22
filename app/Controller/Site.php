<?php

namespace Controller;

use Model\Post;
use Model\Room_view;
use Model\divisions_name;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Workers;
use Model\Room;
use Model\Divisions_view;




class Site
{
    public function index(): string
    {
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => '']);
    }
    public function workers(): string
    {
        $workers = Workers::all();
    return new View('site.workers',['workers' => $workers]);
    }
    public function room(): string
    {
        $room = Room::all();
        return new View('site.room',['room' => $room]);
    }
    public function divisions_view(): string
    {
        $divisions_view = Divisions_view::all();
        return new View('site.divisions_view',['divisions_view' => $divisions_view]);
    }
    public function chairs(): string
    {
        return new View('site.chairs', ['message' => '']);
    }
    public function chairs_mat(): string
    {
        return new View('site.chairs_mat', ['message' => '']);
    }
    public function chairs_tex(): string
    {
        return new View('site.chairs_tex', ['message' => '']);
    }
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
    }
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function add_workers(Request $request): string
    {
        if ($request->method === 'POST' && Workers::create($request->all())) {
            app()->route->redirect('/workers');
        }
        return new View('site.add_workers');
    }
    public function add_room(Request $request): string
    {

        $roomView = Room_view::all();
        if ($request->method === 'POST' && Room::create($request->all())) {
            app()->route->redirect('/room');
        }
        return new View('site.add_room',['roomView'=> $roomView]);
    }
    public function add_division(Request $request): string
    {
        if ($request->method === 'POST' && Divisions_view::create($request->all())) {
            app()->route->redirect('/divisions_view');
        }
        return new View('site.add_division');
    }

}




