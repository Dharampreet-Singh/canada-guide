<?php

namespace App\Http\Controllers;

use App\Models\GroceryStores;
use Illuminate\Http\Request;

class GroceryStoresAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storeList = GroceryStores::all();
        return view('admin.grocery_stores', compact('storeList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "fields" => [
                "name", "image_url", "address", "city", "state", "zip", "country"
            ],
            "basePath" => "/admin/grocery_stores",
        ];
        return view('components.insert_data', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // For validation
        $this->validate($request, [
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'city' => 'required|min:3',
            'state' => 'required|min:2',
            'zip' => 'required|min:2',
            'country' => 'required|min:3',
        ]);

        $grocery = new GroceryStores();
        $grocery->name = $request->name;
        $grocery->address = $request->address;
        $grocery->city = $request->city;
        $grocery->state = $request->state;
        $grocery->zip = $request->zip;
        $grocery->country = $request->country;

        $grocery->save();

        return redirect("/admin/grocery_stores")->with('success', 'GroceryStores updated.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groceryStore = GroceryStores::find($id);

        $data = [
            "fields" => [
                "name" => $groceryStore->name,
                "image_url" => $groceryStore->image_url,
                "address" => $groceryStore->address,
                "city" => $groceryStore->city,
                "state" => $groceryStore->state,
                "zip" => $groceryStore->zip,
                "country" => $groceryStore->country
            ],
            "basePath" => "/admin/grocery_stores",
            "id" => $id
        ];
        return view('components.update_data', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // For validation
        $this->validate($request, [
            'name' => 'required|min:2',
            'address' => 'required|min:2',
            'city' => 'required|min:2',
            'state' => 'required|min:2',
            'zip' => 'required|min:2',
            'country' => 'required|min:2',
        ]);

        $grocery = GroceryStores::find($id);
        $grocery->name = $request->get('name');
        $grocery->address = $request->get('address');
        $grocery->city = $request->get('city');
        $grocery->state = $request->get('state');
        $grocery->zip = $request->get('zip');
        $grocery->country = $request->get('country');

        $grocery->save();

        return redirect('admin/grocery_stores')->with('flash_message', 'Store updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GroceryStores::destroy($id);
        return redirect('admin/grocery_stores')->with('success', 'Store deleted successfully');
    }
}
