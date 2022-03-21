<?php

namespace App\Http\Controllers;

use App\Http\Requests\PastryRequest;
use App\Models\Pastry;
use Illuminate\Http\Request;

class PastryController extends Controller
{
    public function getPastryPage(){
        return view('admin.addPastry');
    }

    public function addPastry(PastryRequest $request){

        $extension = $request->file('picture')->getClientOriginalExtension();
        $filename = $request->name.'.'.$extension;
        $request->file('picture')->storeAs('public/image', $filename);

        Pastry::create([
            'name' => $request -> name,
            'picture' => $filename,
            'quantity' => $request-> quantity,
            'price' => $request -> price,
        ]);

        return redirect(route('admin-product'));
    }

    public function getUpdatePastry($id){
        $pastry = Pastry::findOrFail($id);

        return view('admin.updatePastry',['pastry' => $pastry]);
    }

    public function updatePastry(PastryRequest $request, $id){

        $pastry = Pastry::findOrFail($id);

        $extension = $request->file('picture')->getClientOriginalExtension();
        $filename = $request->name.'.'.$extension;
        $request->file('picture')->storeAs('public/image', $filename);

        $pastry->update([
            'name' => $request -> name,
            'picture' => $filename,
            'quantity' => $request-> quantity,
            'price' => $request -> price,
        ]);

        return redirect(route('admin-product'));
    }

    public function deletePastry($id){
        Pastry::destroy($id);

        return redirect(route('admin-product'));
    }
}
