<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelbuku;
use Validator;

class dbuku extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $data= Modelbuku::all();
    return view('buku' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku_create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,  [
            'nama_buku' => 'required',
            'kode_buku' => 'required',
            'penerbit' => 'required',
            'jumlah'=>'required',
            
          ]);
  
          $data = new Modelbuku();
          $data->nama_buku= $request->nama_buku;
          $data->kode_buku= $request->kode_buku;
          $data->penerbit= $request->penerbit;
          $data->jumlah= $request->jumlah;
         
          $data-> save();
  
          // $dataBeli = Modelbarang::where('kode_barang',$request->kode_barang)->first();
          // $dataBeli->stok = $dataBeli->stok- $request->jumlah;
          // $dataBeli->save();
  
  
          return redirect()->route('buku.index')->with('alert_message', 'Berhasil menambah data!');
  
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
     $data = Modelbuku::where('id', $id)->get();
     return view('buku_edit',compact('data'));
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
        $this->validate($request,  [
            'nama_buku' => 'required',
            'kode_buku' => 'required',
            'penerbit' => 'required',
            'jumlah'=>'required',
            
          ]);
  
          $data = Modelbuku::where('id',$id)->first();
          $data->nama_buku= $request->nama_buku;
          $data->kode_buku= $request->kode_buku;
          $data->penerbit= $request->penerbit;
          $data->jumlah= $request->jumlah;
         
          $data-> save();
  
          // $dataBeli = Modelbarang::where('kode_barang',$request->kode_barang)->first();
          // $dataBeli->stok = $dataBeli->stok- $request->jumlah;
          // $dataBeli->save();
  
  
          return redirect()->route('buku.edit')->with('alert_message', 'Berhasil menambah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
