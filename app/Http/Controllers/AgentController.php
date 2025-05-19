<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AgentController extends Controller
{
    public function dashboard()
    {
        return view('agent.dashboard'); // Ensure this view exists
    }

    public function showCategoryForm()
    {
        $categories = ['hotel', 'restaurant', 'football_field'];
        return view('agent.become', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|in:hotel,restaurant,football_field',
        ]);
        $user = User::find(Auth::id());
        $user->role = 'agent';
        $user->categories = $request->category;
        $user->save();

        return redirect()->route('agent.dashboard');
    }
}
