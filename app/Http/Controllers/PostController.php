<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index() {
        return view('welcome');
    }

    

    public function storeStudent(Request $request) {

        

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|integer',
            'course' => 'required|string',
        ]);

        
        Post::create($validatedData);

        return response()->json(['message' => 'Student created successfully']);
    }
}


