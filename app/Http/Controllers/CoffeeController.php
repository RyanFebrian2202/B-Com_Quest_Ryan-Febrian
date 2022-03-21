<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoffeeRequest;
use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function getCoffeePage(){
        return view('admin.addCoffee');
    }

    public function addCoffee(CoffeeRequest $request){

        $extension = $request->file('picture')->getClientOriginalExtension();
        $filename = $request->name.'.'.$extension;
        $request->file('picture')->storeAs('public/image', $filename);

        Coffee::create([
            'name' => $request -> name,
            'picture' => $filename,
            'quantity' => $request-> quantity,
            'price' => $request -> price,
        ]);

        return redirect(route('admin-product'));
    }

    public function getUpdateCoffee($id){
        $coffee = Coffee::findOrFail($id);

        return view('admin.updateCoffee',['coffee' => $coffee]);
    }

    public function updateCoffee(CoffeeRequest $request, $id){

        $coffee = Coffee::findOrFail($id);

        $extension = $request->file('picture')->getClientOriginalExtension();
        $filename = $request->name.'.'.$extension;
        $request->file('picture')->storeAs('public/image', $filename);

        $coffee->update([
            'name' => $request -> name,
            'picture' => $filename,
            'quantity' => $request-> quantity,
            'price' => $request -> price,
        ]);

        return redirect(route('admin-product'));
    }

    public function deleteCoffee($id){
        Coffee::destroy($id);

        return redirect(route('admin-product'));
    }
}
