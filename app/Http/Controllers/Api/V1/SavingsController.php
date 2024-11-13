<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Savings;
use App\Http\Requests\StoreSavingsRequest;
use App\Http\Requests\UpdateSavingsRequest;
use App\Http\Controllers\Controller;

class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSavingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Savings $savings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Savings $savings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSavingsRequest $request, Savings $savings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Savings $savings)
    {
        //
    }
}
