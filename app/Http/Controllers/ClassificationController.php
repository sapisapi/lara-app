<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClassificationRequest;
use App\Classification;

class ClassificationController extends Controller
{
    public function index()
    {
        $classifications = Classification::groupBy('chapter_id')->get('chapter_id');
        return view('classification.index',compact('classifications'));
    }
}
