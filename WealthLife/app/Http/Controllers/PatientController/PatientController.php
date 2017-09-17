<?php

namespace App\Http\Controllers\PatientController;

use App\User;
use Illuminate\Http\Request;
use App\Mail\NewPatientEmail;
use App\Http\Controllers\Controller;

class PatientController extends Controller
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
        try{

            $this->validate($request, [

                'app_name' => 'required',
                
                'app_email' => 'required|email',
                
                'app_phone' => 'required'
            ]);
            
            $user = new User();

            $user->name = $request->app_name;

            $user->email = $request->app_email;

            $user->telephone = $request->app_phone;

            $user->occupation = 0;

            $user->save();

            $this->SendMail($request);

            return redirect('/appontment')->with('msg','Great you have an apponiment');


        }catch(\Exception $e){

            $errors = $e->getMessage();
            
            return redirect('/')->with('errors',$errors);

        }
    }

    /**
    * send email to admin site
    */
    protected function SendMail($request)
    {
        \Mail::to('admin@wealthlife.com')->send(new NewPatientEmail($request));
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
