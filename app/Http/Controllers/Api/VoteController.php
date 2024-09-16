<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){
        //RITORNA UN JSON CON X COSE
        $votes = Vote::with('chefs')->get();
        return response()->json(
            [
                "success" => true,
                "results" => $votes
            ]);
    }

    public function show(Vote $vote){
        $vote->loadMissing('chefs');
        return response()->json(
            [
                "success" => true,
                "results" => $vote
            ]);
    }
}
