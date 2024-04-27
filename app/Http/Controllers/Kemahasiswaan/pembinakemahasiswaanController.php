<?php

namespace App\Http\Controllers\Kemahasiswaan;

use App\Http\Controllers\Controller;
use App\Http\Services\Kemahasiswaan\PembinaService;
use Illuminate\Http\Request;

class pembinakemahasiswaanController extends Controller
{
    protected $pembinaService;

    public function __construct(pembinaService $pembinaService)
    {
        $this->pembinaService = $pembinaService;
    }

    public function index()
    {
        $pembina = $this->pembinaService->index();
        
        return view('Kemahasiswaan.pembina.index', compact('pembina'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
