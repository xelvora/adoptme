<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Hewan;
use Validator;


class HewanController extends Controller
{
    public function index(Request $request)
    {
        $hewan = Hewan::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $hewan = Hewan::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('hewan.index', compact('hewan'));
    }//end method

    public function create()
    {

        return view('hewan.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'nama'=>'required|max:255',
            'jenishewan'=>'required|max:255',
            'ras'=>'required|max:255',
            'umur'=>'required|max:255',

        ]);
        
        if($validasi->fails())
        {
            return redirect()->route('hewan.create')->withInput()->withErrors($validasi);
        }

        Hewan::create($data);
        return redirect()->route('hewan.index');
    }//end method

    public function destroy($id)
    {
        $data = hewan::findOrFail($id);
        $data->delete();
        return redirect()->route('hewan.index');
    }//end method


    public function show($id)
    {
        $hewan = Hewan::findOrFail($id);
        return view('hewan.show',compact('hewan'));
    }//end method


    public function edit($id)
    {
        $hewan = Hewan::findOrFail($id);
        return view('hewan.edit',compact('hewan'));
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
    $hewan = Hewan::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
        'nama'=>'required|max:255',
        'jenishewan'=>'required|max:255',
        'ras'=>'required|max:255',
        'umur'=>'required|max:255',

        ]);

        if($validasi->fails())
        {
            return redirect()->route('hewan.create',[$id])->withErrors($validasi);
        }
       
          $hewan->update($data);
          //Alert::toast('Berhasil di edit','success');
          return redirect()->route('hewan.index');
       }
}

?>