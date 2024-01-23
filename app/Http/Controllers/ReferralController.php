<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReferralRequest;
use App\Models\Referral;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Referral::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReferralRequest $request)
    {
        $validated = $request->validated();

        return Referral::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(Referral $referral)
    {
        return $referral;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReferralRequest $request, Referral $referral)
    {
        $validated = $request->validated();
        $referral->update($validated);
        return $referral;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referral $referral)
    {
        $referral->delete();
        return 'Success';
    }
}
