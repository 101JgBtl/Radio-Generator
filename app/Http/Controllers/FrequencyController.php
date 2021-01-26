<?php

namespace App\Http\Controllers;

use App\Models\Frequency;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrequencyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frequency = new Frequency();
        $frequency->uuid = Str::uuid();
        $frequency->save();

        foreach ($request->units as $group) {
            $unit = new Unit();
            $unit->callsign         = $group['callsign'];
            $unit->radio_type       = $group['radio_type'];
            $unit->frequency_id     = $frequency->id;
            $unit->alpha            = $frequency->get_frequency($unit->radio_type);
            $unit->bravo            = $frequency->get_frequency($unit->radio_type);
            $unit->chalie           = $frequency->get_frequency($unit->radio_type);
            $unit->delta            = $frequency->get_frequency($unit->radio_type);
            $unit->echo             = $frequency->get_frequency($unit->radio_type);
            $unit->foxtrot          = $frequency->get_frequency($unit->radio_type);
            $unit->golf             = $frequency->get_frequency($unit->radio_type);
            $unit->hotel            = $frequency->get_frequency($unit->radio_type);
            $unit->india            = $frequency->get_frequency($unit->radio_type);
            $unit->juliett          = $frequency->get_frequency($unit->radio_type);
            $unit->kilo             = $frequency->get_frequency($unit->radio_type);
            $unit->lima             = $frequency->get_frequency($unit->radio_type);
            $unit->mike             = $frequency->get_frequency($unit->radio_type);
            $unit->november         = $frequency->get_frequency($unit->radio_type);
            $unit->oscar            = $frequency->get_frequency($unit->radio_type);
            $unit->papa             = $frequency->get_frequency($unit->radio_type);
            $unit->quebec           = $frequency->get_frequency($unit->radio_type);
            $unit->romeo            = $frequency->get_frequency($unit->radio_type);
            $unit->sierra           = $frequency->get_frequency($unit->radio_type);
            $unit->tango            = $frequency->get_frequency($unit->radio_type);
            $unit->uniform          = $frequency->get_frequency($unit->radio_type);
            $unit->victor           = $frequency->get_frequency($unit->radio_type);
            $unit->whiskey          = $frequency->get_frequency($unit->radio_type);
            $unit->xray             = $frequency->get_frequency($unit->radio_type);
            $unit->yankee           = $frequency->get_frequency($unit->radio_type);
            $unit->zulu             = $frequency->get_frequency($unit->radio_type);
            $unit->save();
        }

        return redirect()->route('show', $frequency);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frequency  $frequency
     */
    public function show(Frequency $frequency)
    {
        $frequency->hits++;
        $frequency->save();

        $frequencies = collect();


        foreach (Unit::NATO_ALPHABETH as $key => $letter) {
            $data = (object)['key' => $key, 'frequencies' => []];
            $frequencies->push($data);
        }

        $units = $frequency->units;
        $frequencies->each(function (&$freq) use ($units) {
            $units->each(function($unit) use (&$freq) {
                $freq->frequencies[] = $unit->{$freq->key};
            });
        });

        $units = $frequency->units->map(fn($el) => $el->callsign);

        return view('show')->with([
            'frequencies' => $frequencies,
            'units' => $units
        ]);
    }
}
