<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeaRequest;
use App\Models\Tea;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    public function getTeaPage(){
        return view('admin.addTea');
    }

    public function addTea(TeaRequest $request){

        $extension = $request->file('picture')->getClientOriginalExtension();
        $filename = $request->name.'.'.$extension;
        $request->file('picture')->storeAs('public/image', $filename);

        Tea::create([
            'name' => $request -> name,
            'picture' => $filename,
            'quantity' => $request-> quantity,
            'price' => $request -> price,
        ]);

        return redirect(route('admin-product'));
    }

    public function getUpdateTea($id){
        $tea = Tea::findOrFail($id);

        return view('admin.updateTea',['tea' => $tea]);
    }

    public function updateTea(TeaRequest $request, $id){

        $tea = Tea::findOrFail($id);

        $extension = $request->file('picture')->getClientOriginalExtension();
        $filename = $request->name.'.'.$extension;
        $request->file('picture')->storeAs('public/image', $filename);

        $tea->update([
            'name' => $request -> name,
            'picture' => $filename,
            'quantity' => $request-> quantity,
            'price' => $request -> price,
        ]);

        return redirect(route('admin-product'));
    }

    public function deleteTea($id){
        Tea::destroy($id);

        return redirect(route('admin-product'));
    }
}
