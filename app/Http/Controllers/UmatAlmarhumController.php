<?php

namespace App\Http\Controllers;

use App\Http\Requests\UmatAlmarhumRequest;
use Illuminate\Http\Request;
use App\Model\UmatAlmarhum;
use App\model\Umat;

class UmatAlmarhumController extends Controller
{
    public function __construct()
    {
        $this->title = "umat-almarhum";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = UmatAlmarhum::orderBy('umat_id', 'ASC')->get();
        $umat = Umat::pluck('nama', 'id');
        return view($title . '.index', compact('title', 'data', 'umat'));
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
    public function store(UmatAlmarhumRequest $request)
    {
        $data = new UmatAlmarhum();
        $data->umat_id = $request->get('umat_id');
        $data->tgl_wafat = $request->get('tgl_wafat');
        $data->tgl_makam = $request->get('tgl_makam');
        if ($data->save()) {
            return redirect($this->title)->with('success', 'Berhasil');
        } else {
            return redirect($this->title)->with('error', 'Gagal');
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
        $model = $request->all();
        $data = UmatAlmarhum::find($model['id']);
        if ($data->update($model)) {
            return redirect($this->title)->with('success', 'Berhasil');
        } else {
            return redirect($this->title)->with('error', 'Gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { }
}
