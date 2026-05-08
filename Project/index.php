<?php

require_once 'routers.php';

$router = new Router();

require_once 'routes/web.php';

$router->dispatch();