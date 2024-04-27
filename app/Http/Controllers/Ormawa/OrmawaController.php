<?php

namespace App\Http\Controllers\Ormawa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\OrmawaService;

class OrmawaController extends Controller
{
    protected $ormawaService;

    public function __construct(OrmawaService $ormawaService)
    {
        $this->ormawaService = $ormawaService;
    }

    public function index()
    {
        $userId = Auth::id();
        $ormawa = $this->ormawaService->getOrmawaByUserId($userId);

        return view('Ormawa.index', compact('ormawa'));
    }
}