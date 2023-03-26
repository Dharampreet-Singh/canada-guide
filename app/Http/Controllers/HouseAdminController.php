<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Housing;
use Illuminate\Http\Request;

class HouseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houseList = Housing::all();
        return view('admin.houses', compact('houseList'));
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
                "images",
                "address", "city", "state", "zip",
                "property_type", "property_for", "number_of_beds",
                "number_of_bathrooms", "is_available", "price", "utilities", "area",
            ],
            "basePath" => "/admin/housing",
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
        //         For validation
        $this->validate($request, [

            'address' => 'required|min:3',
            'state' => 'required|min:2',
            'zip' => 'required|min:2',
            // 'description' => 'required|min:3',
            'property_type' => 'required|min:3',
            'property_for' => 'required|min:3',
            'number_of_beds' => 'required|min:1',
            'number_of_bathrooms' => 'required|min:1',
            'price' => 'required|min:2',
            'utilities' => 'required|min:3',
            'area' => 'required|min:3',
        ]);

        $housing = new Housing();

        $housing->images = $request->images;
        $housing->address = $request->address;
        $housing->city = $request->city;
        $housing->state = $request->state;
        $housing->zip = $request->zip;
        $housing->description = $request->description;
        $housing->property_type = $request->property_type;
        $housing->property_for = $request->property_for;
        $housing->number_of_beds = $request->number_of_beds;
        $housing->number_of_bathrooms = $request->number_of_bathrooms;
        $housing->price = $request->price;
        $housing->utilities = $request->utilities;
        $housing->area = $request->area;

        $housing->save();

        return redirect("/admin/housing")->with('success', 'Housing Created.');
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
        $houseData = Housing::find($id);
        $data = [
            "fields" => [
                "images" => $houseData->images,
                "address" => $houseData->address,
                "city" => $houseData->city,
                "state" => $houseData->state,
                "zip" => $houseData->zip,
                "property_type" => $houseData->property_type,
                "property_for" => $houseData->property_for,
                "number_of_beds" => $houseData->number_of_beds,
                "number_of_bathrooms" => $houseData->number_of_bathrooms,
                "is_available" => $houseData->is_available,
                "price" => $houseData->price,
                "utilities" => $houseData->utilities,
                "area" => $houseData->area,
            ],
            "basePath" => "/admin/housing",
            "id" => $id,
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
        //         For validation
        $this->validate($request, [

            'address' => 'required|min:2',
            'state' => 'required|min:2',
            'zip' => 'required|min:2',
            // 'description' => 'required|min:2',
            'property_type' => 'required|min:2',
            'property_for' => 'required|min:2',
            'number_of_beds' => 'required|min:1',
            'number_of_bathrooms' => 'required|min:1',
            'price' => 'required|min:2',
            'utilities' => 'required|min:2',
            'area' => 'required|min:2',

        ]);

        $housing = Housing::find($id);
        $housing->images =  $request->get('images');
        $housing->address = $request->get('address');
        $housing->city = $request->get('city');
        $housing->state = $request->get('state');
        $housing->zip = $request->get('zip');
        $housing->description = $request->get('description');
        $housing->is_available = $request->get('is_available');
        $housing->property_type = $request->get('property_type');
        $housing->property_for = $request->get('property_for');
        $housing->number_of_beds = $request->get('number_of_beds');
        $housing->number_of_bathrooms = $request->get('number_of_bathrooms');
        $housing->price = $request->get('price');
        $housing->utilities = $request->get('utilities');
        $housing->area = $request->get('area');

        $housing->save();

        return redirect("/admin/housing");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Housing::destroy($id);
        return redirect('/admin/housing');
    }
}
