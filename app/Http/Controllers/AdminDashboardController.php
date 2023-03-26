<?php

namespace App\Http\Controllers;

use App\Models\GroceryStores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // $blogs = Blogs::all();
        $groceryStoreData = array();
        $groceryStoreCities = array();
        $groupedGroceryStores = DB::table('grocery_stores')
            ->select('state', DB::raw('count(*) as total'))
            ->groupBy('state')
            ->get();

        $groupedGroceryStores = json_decode($groupedGroceryStores);
        // dd(json_decode($groupedGroceryStores));
        foreach ($groupedGroceryStores as $key => $value) {
            array_push($groceryStoreCities, $value->state);
            array_push($groceryStoreData, $value->total);
        }

        $blogsCount = array();
        $blogsUsers = array();

        $blogs = DB::table('blogs')
            ->select('user_id', DB::raw('count(*) as total'))
            ->groupBy('user_id')
            ->get();

        $blogs = json_decode($blogs);
        foreach ($blogs as $key => $value) {
            array_push($blogsUsers, $value->user_id);
            array_push($blogsCount, $value->total);
        }
        // dd($groceryStoreCities);
        return view('admin.admin')
            ->with('groceryStoreData', json_encode($groceryStoreData, JSON_NUMERIC_CHECK))
            ->with('groceryStoreCities', json_encode($groceryStoreCities, JSON_NUMERIC_CHECK))
            ->with('blogsCount', json_encode($blogsCount, JSON_NUMERIC_CHECK))
            ->with('blogsUsers', json_encode($blogsUsers, JSON_NUMERIC_CHECK));
    }
}
