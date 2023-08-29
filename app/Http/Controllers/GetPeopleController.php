<?php

namespace App\Http\Controllers;

use App\OpenApi\SecuritySchemes\AveonlineApiTokenSecurityScheme;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;

#[OpenApi\PathItem]
class GetPeopleController extends Controller
{
    /**
     * Get All People
     * 
     * Este me permite obtenes todas las personas
     * ```json
     * {
     * "name": "John Doe",
     * "email": "yeimar112003@gmail.com'
     * }
     */
    #[OpenApi\Operation(tags: ['People'], security: AveonlineApiTokenSecurityScheme::class)]
    #[OpenApi\RequestBody(factory: \App\OpenApi\RequestBodies\People\CreatePeopleRequestBody::class)]
    public function index()
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
