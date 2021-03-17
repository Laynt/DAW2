<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerResource;
use App\Models\Airplane;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AirplaneController extends Controller
{
    
    public function index()
    {
        return ManufacturerResource::collection(Manufacturer::paginate(25));
    }

    
    public function store(Request $request)
    {
        try{
            $airplane = Manufacturer::create($request->validated());
            return new ManufacturerResource($airplane);
        }catch(\Exception $exception){
            throw new HttpException(400, "Invalid data - {$exception->getMessage}");
        }
    }

    
    public function show(Airplane $airplane)
    {
        return new ManufacturerResource($airplane);
    }

    
    public function update(Request $request, Airplane $airplane)
    {
        try{
            $airplane ->update($request->validated());
            return new ManufacturerResource($airplane);
        }catch(\Exception $exception){
            throw new HttpException(400, "Invalid data - {$exception->getMessage}");
        }
    }

    public function destroy(Airplane $airplane)
    {
        
        $airplane->delete();
        return response()->json(null, 204);
    }
}
