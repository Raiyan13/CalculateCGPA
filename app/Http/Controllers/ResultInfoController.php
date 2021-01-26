<?php

namespace App\Http\Controllers;

use App\Models\resultInfo;
use Illuminate\Http\Request;

class ResultInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function show(resultInfo $resultInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(resultInfo $resultInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resultInfo $resultInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(resultInfo $resultInfo)
    {
        //
    }

    public function calculate_result(Request $request)
    {
        return $request->input();
    }
}
