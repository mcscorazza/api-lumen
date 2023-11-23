<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;


class SensorController extends Controller
{
    private $sensor;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Sensor $sensor)
    {
        $this->sensor = $sensor;
    }

    public function index()
    {
        return $this->sensor->paginate(10);
    }

    public function show($sensor)
    {
        return $this->sensor->find($sensor);
    }

    public function store(Request $request)
    {
        $this->sensor->create($request->all());

        return response()->json(['data' => ['message' => 'Sensor inserido com sucesso!']]);
    }

    public function update($sensor, Request $request)
    {
        $sensor = $this->sensor->find($sensor);
        $sensor->update($request->all());
        return response()->json(['data' => ['message' => 'Sensor atualizado com sucesso!']]);
    }

    public function destroy($sensor)
    {
        $sensor = $this->sensor->find($sensor);
        $sensor->delete();
        return response()->json(['data' => ['message' => 'Sensor excluido com sucesso!']]);

    }

}
