<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;
use Illuminate\Support\Facades\Mail;

use App\Mail\VideogameDeleteMail;

class ApiController extends Controller
{
    public function getVideogames() {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }

    public function deleteVideogames($id){

        $videoGame = VideoGame::findOrFail($id);
        $videoGame -> delete();
        Mail::to('test@test.com') -> send(new VideogameDeleteMail());
        return redirect() -> route('home');

    }
}
