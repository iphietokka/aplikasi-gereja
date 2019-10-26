<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnakUmatRequest;
use Illuminate\Http\Request;
use App\Model\AnakUmat;
use App\Model\Umat;

class AnakUmatController extends Controller
{
    public function __construct()
    {
        $this->title = "anak-umat";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $umat = Umat::pluck('nama', 'id');
        $anakumat = AnakUmat::with('umat')->orderBy('nama', 'desc')->get();
        return view($title . '.index', compact('title', 'umat', 'anakumat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnakUmatRequest $request)
    {
        $data = new AnakUmat();
        $data->nama = $request->get('nama');
        $data->nik = $request->get('nik');
        $data->ttl = $request->get('ttl');
        $data->anak_ke = $request->get('anak_ke');
        $data->pekerjaan = $request->get('pekerjaan');
        $data->umat_id = $request->get('umat_id');
        if ($data->save()) {
            return redirect($this->title)->with('success', 'Berhasil');
        } else {
            return redirect($this->title)->with('error', 'gagal');
        }
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
        //
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
        //
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
