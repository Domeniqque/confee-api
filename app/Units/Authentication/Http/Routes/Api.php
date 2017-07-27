<?php

namespace Confee\Units\Authentication\Http\Routes;

use Confee\Support\Routing\RouterFile;
use Illuminate\Http\Request;

class Api extends RouterFile
{

    protected function routes()
    {
        $this->userRoutes();
    }

    protected function userRoutes()
    {
        $this->router->get('/user', function (Request $request) {
            return $request->user();
        });
    }
}