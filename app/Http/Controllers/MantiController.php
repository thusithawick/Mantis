<?php

namespace App\Http\Controllers;

use App\Models\Manti;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MantiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manti = Manti::all();
        return Response::json(array(
            'success' => true,
            'data'   => $manti
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { DB::beginTransaction();
        try{
            $imageName = null;

            if ($request->has('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/customer/'), $imageName);
                //return back()->with('success','You have successfully upload image.')->with('image',$imageName);
            }

            $manti = new Manti();
            $manti->Dept_id = $request->get('Dept_id');
            $manti->reporter = $request->get('reporter');
            $manti->assignto = $request->get('assignto');
            $manti->status = $request->get('status');
            $manti->prio = $request->get('prio');
            $manti->Severity = $request->get('Severity');
            $manti->Reproducibility = $request->get('Reproducibility');
            $manti->title = $request->get('title');
            $manti->disc = $request->get('disc');
            $manti->ad_info = $request->get('ad_info');
            $manti->contact = $request->get('contact');
            $manti->contact_per = $request->get('contact_per');
            $manti->IpAddress = $request->get('IpAddress');
            $manti->submited_time = $request->get('submited_time');
            $manti->save();

            DB::commit();
            return Response::json(array(
                'success' => true,
                'data'   => "sucess"
            ));

        }catch(Exception $e){
            DB::rollBack();
            return Response::json(array(
                'success' => false,
                'data'   => $e->getMessage()
            ));
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
        $manti = Manti::findOrFail($id);
        return Response::json(array(
            'success' => true,
            'data'   => $manti
        ));
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
