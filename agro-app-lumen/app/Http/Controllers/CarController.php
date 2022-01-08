<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return Car::all();
    }

    public function store(Request $request){
        try{
            $car = new Car();
            $car->name = $request->name;

            if($car->save()){
                return response()->json([ 'status' => 'success', 'message' => 'Car added succesfully']); 
            }
        
        }catch(\Exception $e){
            return response()->json([ 'status' => 'error', 'message' => $e->getMessage()]); 
        }
    }

    public function update(Request $request, $id) {
        try{
            $car = Car::findOrFail($id);
            $car->name = $request->name;

            if($car->save()){
                return response()->json([ 'status' => 'success', 'message' => 'Car updated succesfully']); 
            }
        
        }catch(\Exception $e){
            return response()->json([ 'status' => 'error', 'message' => $e->getMessage()]); 
        }
    }

    public function destroy($id){
        try{
            $car = Car::findOrFail($id);

            if ($car->delete()){
                return response()->json(['status' => 'success', 'message' => 'Car deleted successfully']);
            }
        }catch(\Exception $e){
            return response()->json(['status'=> 'error', 'message'=> $e->getMessage()]);
        }
    }
  
}
