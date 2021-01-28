<?php

namespace App\Http\Controllers;

use App\Models\resultInfo;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Session;

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
        
        session_start();
    
        $data = $request->input('result');
        $resultInfo = new resultInfo();
        $resultInfo->semester = $_SESSION['semester'];
        $resultInfo->cgpa = $_SESSION['cgpa'];
        $resultInfo->save();

        Session::flash('saved', 'This is a save message!');
        return view('records')->with('allResult',resultInfo::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function show(resultInfo $resultInfo)
    {
        session_start();
        Session::flash('unsaved', 'This is a save message!');
        return view('records')->with('allResult',resultInfo::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(resultInfo $resultInfo, $id)
    {
        return view('update_result')->with('allResult', resultInfo::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resultInfo $resultInfo, $id)
    {

        $resultInfo = resultInfo::find($id);
        $cgpa = ResultInfoController::calculate_result_update($request, $resultInfo, $id);

        $resultInfo->update(['semester' => $request->input('semester'), 'cgpa' => $cgpa]);

        // DD($request->input());

        session_start();
        Session::flash('updated', 'This is a update message!');
        return redirect('show_records')->with('allResult',resultInfo::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resultInfo  $resultInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(resultInfo $resultInfo, $id)
    {
        session_start();

        resultInfo::destroy('id',$id);
    
        Session::flash('deleted', 'This is a delete message!');
        return redirect('show_records')->with('allResult',resultInfo::all());
    }

    public function calculate_result(Request $request)
    {
        $credits = array();
        $gpa = array();
        $current_semester = $request->input('semester');

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

        return view('show_result', ['result' => number_format($helper->get_result(),2),'semester' => $current_semester]);
    }

    public function calculate_result_update(Request $request, resultInfo $resultInfo, $id){

        $credits = array();
        $gpa = array();
        $current_semester = $request->input('semester');

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

        return number_format($helper->get_result(),2);
    }
}
