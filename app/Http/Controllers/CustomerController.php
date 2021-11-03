<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Dokter;

class CustomerController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $dokters = Dokter::paginate(9);
        return view('customers.index', compact('brands', 'dokters'));
    }


    public function show($id)
    {
        $dokter = Dokter::with('brand')->where('id', $id)->first();
        return view('customers.detail', compact('brands', 'dokter'));
    }

    public function search(Request $request)
    {
        $brands = Brand::all();
        $keyword = $request->keyword;
        $dokters = Dokter::where('nama', 'like', '%' . $keyword . '%')->paginate(9);
        $dokters->appends(['keyword' => $keyword]);
        return view('customers.index', compact('brands', 'dokters'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function filter(Request $request)
    {
        $brands = Brand::all();

        $dokter = (new Dokter())->newQuery();

        if ($request->merk != '') {
            $dokter->where('brand_id', $request->merk);
        }

        if ($request->kondisi != '') {
            $dokter->where('status', $request->kondisi);
        }

        if ($request->transmisi != '') {
            $dokter->where('transmisi', $request->transmisi);
        }

        if ($request->kapasitas != '') {
            $dokter->where('kapasitas', $request->kapasitas);
        }
        $dokters = $dokter->paginate(9);
        $dokters->appends(['brand_id' => $request->merk, 'status' => $request->kondisi, 'transmisi' => $request->transmisi, 'kapasitas' => $request->kapasitas]);
        return view('customers.index', compact('brands', 'dokters'));
    }


    public function treatments(){
        return view('customers.customerbrands');
    }

    public function contact(){
        return view('customers.contact');
    }
}
