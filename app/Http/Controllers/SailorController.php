<?php

namespace App\Http\Controllers;

use App\Models\Sailor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        //
        $sailor = Sailor::all();
//        dd($sailor);
        return view('dashboard.admins.sailor')->with('sailor', $sailor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Sailor $sailor
     * @return Response
     */
    public function show(Sailor $sailor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sailor $sailor
     * @return Response
     */
    public function edit(Sailor $sailor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Sailor $sailor
     * @return Response
     */
    public function update(Request $request, Sailor $sailor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sailor $sailor
     * @return Response
     */
    public function destroy(Sailor $sailor)
    {
        //
    }
}
