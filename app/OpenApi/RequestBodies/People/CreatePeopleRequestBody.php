<?php

namespace App\OpenApi\RequestBodies\People;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\RequestBodyFactory;

class CreatePeopleRequestBody extends RequestBodyFactory  implements Reusable
{
    public function build(): RequestBody
    {
        return RequestBody::create('createPeople')
            ->description('Create People')
            ->content(
                MediaType::json()->schema(
                  Schema::object()->properties(
                    Schema::string('name')->example('John Doe'),
                    Schema::string('email')->example('yemar112003@gmail.com'),
                )
                )
        );
    }
}
