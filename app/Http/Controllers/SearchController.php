<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {       
            $search = $request->search;
            $mahasiswa = \DB::table('mahasiswa')->where('nim', 'like', "%" . $search . "%")->paginate(6);
            return view('mahasiswa.index', compact('mahasiswa'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
}
