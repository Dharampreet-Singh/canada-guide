<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;

class GrocerySearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grocery_stores = Grocery::all();
        return view('grocerysearch.list', ['grocery_stores' => $grocery_stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grocerysearch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        // For validation
//        $this->validate($request, [
//            'name' => 'required|min:3',
//            'address' => 'required|min:3',
//            'city' => 'required|min:3',
//            'state' => 'required|min:3',
//            'zip' => 'required|min:3',
//            'country' => 'required|min:3',
//        ]);

        $grocery = new Grocery();
        $grocery->name = $request->name;
        $grocery->address = $request->address;
        $grocery->city = $request->city;
        $grocery->state = $request->state;
        $grocery->zip = $request->zip;
        $grocery->country = $request->country;

        $grocery->save();

        return redirect("/grocerysearch")->with('success', 'GroceryStores updated.');;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grocery = Grocery::find($id);
//        return view('grocerysearch.edit', ['grocery' => $grocery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        // For validation
//        $this->validate($request, [
//            'name' => 'required|min:2',
//            'address' => 'required|min:2',
//            'city' => 'required|min:2',
//            'state' => 'required|min:2',
//            'zip' => 'required|min:2',
//            'country' => 'required|min:2',
//
//        ]);

        $grocery = Grocery::find($id);
        $grocery->name = $request->get('name');
        $grocery->address = $request->get('address');
        $grocery->city = $request->get('city');
        $grocery->state = $request->get('state');
        $grocery->zip = $request->get('zip');
        $grocery->country = $request->get('country');

        $grocery->save();

        return redirect("/grocerysearch");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grocery = Grocery::find($id);
        $grocery->delete();
        return redirect("/grocerysearch");

    }
}


