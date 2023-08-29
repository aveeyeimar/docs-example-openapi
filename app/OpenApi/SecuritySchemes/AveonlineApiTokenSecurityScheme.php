<?php

namespace App\OpenApi\SecuritySchemes;

use GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityScheme;
use Vyuldashev\LaravelOpenApi\Factories\SecuritySchemeFactory;

class AveonlineApiTokenSecurityScheme extends SecuritySchemeFactory
{
    public function build(): SecurityScheme
    {
        return SecurityScheme::create('AveonlineApiToken')
            ->type(SecurityScheme::TYPE_API_KEY)
            ->name('Authorization')
            ->scheme('bearer')
            ->bearerFormat('JWT');
    }
}
