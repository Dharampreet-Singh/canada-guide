<?php

namespace App\Http\Controllers;

use App\Models\TouristPlaces;
use Illuminate\Http\Request;

class TouristPlacesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placesList = TouristPlaces::all();
        return view('admin.tourist_places', compact('placesList'));
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
                "images", "about", "location"
            ],
            "basePath" => "/admin/tourist_places",
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
        $this->validate($request, [
            'images' => 'required',
            'about' => 'required',
            'location' => 'required',
        ]);

        $place = TouristPlaces::create([
            'images' => $request->images,
            'about' => $request->about,
            'location' => $request->location,
        ]);

        return redirect('admin/tourist_places')->with('flash_message', 'Place Created!');
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
        $placeData = TouristPlaces::find($id);

        $data = [
            "fields" => [
                "images" => $placeData->images, "about" => $placeData->about, "location" => $placeData->location
            ],
            "basePath" => "/admin/tourist_places",
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
        $this->validate($request, [
            'images' => 'required',
            'about' => 'required',
            'location' => 'required',
        ]);

        $place = TouristPlaces::find($id);
        $place->images = $request->images;
        $place->about = $request->about;
        $place->location = $request->location;
        $place->save();

        return redirect('admin/tourist_places')->with('flash_message', 'Place updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TouristPlaces::destroy($id);
        return redirect('admin/tourist_places');
    }
}
