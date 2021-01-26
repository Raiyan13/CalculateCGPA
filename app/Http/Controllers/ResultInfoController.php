<?php

namespace App\Http\Controllers;

use App\Models\resultInfo;
use Illuminate\Http\Request;
use App\Helpers\Helper;

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
        $credits = array();
        $gpa = array();

        $credit1 = $request->input('credit1');
        $credit2 = $request->input('credit2');
        $credit3 = $request->input('credit3');
        $credit4 = $request->input('credit4');

        array_push($credits, $credit1);
        array_push($credits, $credit2);
        array_push($credits, $credit3);
        array_push($credits, $credit4);

        $gpa1 = $request->input('gpa1');
        $gpa2 = $request->input('gpa2');
        $gpa3 = $request->input('gpa3');
        $gpa4 = $request->input('gpa4');

        array_push($gpa, $gpa1);
        array_push($gpa, $gpa2);
        array_push($gpa, $gpa3);
        array_push($gpa, $gpa4);

        $helper = new Helper($credits, $gpa);

        return view('show_result', ['result' => $helper->get_result()]);
    }
}
