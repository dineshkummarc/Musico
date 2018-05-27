<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;

class MusicController extends Controller
{
	public function index(){
		$musics = Music::all();

		return view('music.index', compact('musics'));
	}

	public function show($id){
		$music = Music::where('id', $id)->first();

		return view('music.show', compact('music'));
	}

    public function create(){
    	return view('music.create');
    }

    public function store(){
      Music::create([
        'title' => request('title'),
        'filename' => request('filename')
      ]);

      return redirect('music/create');
    }
}
