<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Brand;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters = Dokter::with('brand')->get();
        return view('dokters.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokters = Dokter::all();
        return view('dokters.create', compact('dokters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'specialist' => 'required',
            'image' => 'required',
            'jadwal' => 'required',

        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Dokter::create([
            'nama' => $request->nama,
            'specialist' => $request->specialist,
            'image' => $image_name,
            'jadwal' => $request->jadwal,
        ]);


        return redirect()->route('dokters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = Dokter::with('brand')->where('id', $id)->first();
        return view('dokters.detail', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::with('brand')->where('id', $id)->first();
        $brands = Brand::all();
        return view('dokters.edit', compact('dokter', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'specialist' => 'required',
            'image' => 'required',
            'jadwal' => 'required',
        ]);

        $dokter = Dokter::with('brand')->where('id', $id)->first();
        $dokter->nama = $request->get('nama');
        $dokter->specialist = $request->get('specialist');
        $dokter->image = $request->get('image');
        $dokter->jadwal = $request->get('jadwal');

        if ($request->file('image')) {
            if ($dokter->image && file_exists(storage_path('app/public/' . $dokter->image))) {
                \Storage::delete('public/' . $dokter->image);
            }
            $image_name = $request->file('image')->store('images', 'public');

            $dokter->image = $image_name;
        }

        $dokter->save();

        return redirect()->route('dokters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect()->back();
    }

    public function doktor()
    {
        $dokters = Dokter::all();
        return view('customers.customerdokter', compact('dokters'));
    }

    public function detaildoktor($id)
    {
        $dokters = Dokter::find([$id]);
        return view('customers.detaildokter', compact('dokters'));
    }
}
