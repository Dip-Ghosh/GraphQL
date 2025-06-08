<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

final  class Greetings
{

    public function __invoke(null $_, array $args)
    {
        return "Hello World!";
    }
}
