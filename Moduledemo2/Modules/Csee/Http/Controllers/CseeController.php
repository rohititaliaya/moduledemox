<?php

namespace Modules\Csee\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Csee\Entities\Customer2;


class CseeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('csee::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('csee::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $req)
    {
        $fnm=$req->fnm;
        $lnm=$req->lnm;
        $email=$req->email;
        $phone=$req->mo;
        $pass=$req->pwd;
        $rpass=$req->rpwd;
        if ($pass==$rpass) {
            $ins=new Customer2;
            $ins->u_fnm=$fnm;
            $ins->u_lnm=$lnm;
            $ins->u_email=$email;
            $ins->u_mo=$phone;
            $ins->u_pass=$pass;
            $ins->save();
            return response()->json(['messages'=>'Succesfully Registered !']);    
        } else {
            return response()->json(['messageu'=>'Password dosent match !']);
        }
      
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('csee::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('csee::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $x=Customer2::find($id);
        $x->delete();
        return response()->json(['message'=>'deleted']);
    }
    public function csmd()
    {
        return response()->json(Customer2::get());
    }
}
