<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {

        $projects = Technology::with('projects')->get();

        return response()->json(
            [
                "success" => true,
                "results" => $projects,
            ]
        );
    }
}
