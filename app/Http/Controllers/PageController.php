<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;

class PageController extends Controller
{
    protected $episode;

    public function __construct(Episode $episode)
    {
        $this->episode = $episode;
    }

    public function index()
    {
        $episodes = $this->episode->paginate('12');

        return view('index', compact('episodes'));
    }
}
