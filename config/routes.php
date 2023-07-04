<?php

use Johncms\Community\Controllers\CommunityController;
use League\Route\RouteGroup;
use League\Route\Router;

return function (Router $router) {
    $router->addPatternMatcher('topType', '[a-z]+');

    $router->group('/seo', function (RouteGroup $route) {
        $route->get('/', [CommunityController::class, 'index'])->setName('seo.index');
    });
};
