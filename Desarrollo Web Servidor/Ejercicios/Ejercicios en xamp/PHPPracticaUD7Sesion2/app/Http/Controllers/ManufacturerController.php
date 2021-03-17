<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerResource;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ManufacturerController extends Controller
{
    public function index()
    {
        return ManufacturerResource::collection(Manufacturer::paginate(25));
    }

    public function store(Request $request)
    {
        try{
            $manufacturer = Manufacturer::create($request->validated());
            return new ManufacturerResource($manufacturer);
        }catch(\Exception $exception){
            throw new HttpException(400, "Invalid data - {$exception->getMessage}");
        }
    }

    public function show(Manufacturer $manufacturer)
    {
        return new ManufacturerResource($manufacturer);
    }

    public function update(Request $request, Manufacturer $manufacturer)
    {
        try{
            $manufacturer ->update($request->validated());
            return new ManufacturerResource($manufacturer);
        }catch(\Exception $exception){
            throw new HttpException(400, "Invalid data - {$exception->getMessage}");
        }
    }

    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
        return response()->json(null, 204);
    }
}
