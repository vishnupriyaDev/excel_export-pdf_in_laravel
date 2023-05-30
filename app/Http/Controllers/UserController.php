<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Rap2hpoutre\FastExcel\FastExcel;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $data = $request->only(['name','age','phone']);
        
        $user = User::create($data);
        
        return 'User has been created and User id is'.$user->id;
}
    
    public function read(){
        $users = User::all();
        return view('read',['users'=>$users]);
        
    }

    public function pdf(){
        $users = User::get()->toArray();
        // dd($users );
        $pdf = Pdf::loadView('pdf.invoice',compact('users'));
      
        return $pdf->download('invoice.pdf');
    }

    public function export(){
        $users = User::all();
        return (new FastExcel($users))->download('users_export.xlsx');
    }
}