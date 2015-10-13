<?php
use Cake\Routing\Router;

Router::plugin('Linkedin', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
