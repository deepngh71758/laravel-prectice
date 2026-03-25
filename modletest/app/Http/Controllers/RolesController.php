<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Http\Requests\StorerolesRequest;
use App\Http\Requests\UpdaterolesRequest;
use Illuminate\Http\Request;

class rolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $roles=roles::with('person')->find(2);

        // $data = $request->session()->all();

        return $roles;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerolesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterolesRequest $request, roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(roles $roles)
    {
        //
    }
}
