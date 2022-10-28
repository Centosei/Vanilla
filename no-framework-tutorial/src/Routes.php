<?php

declare(strict_types=1);

return [
    ['GET', '/hellow-world', function () {
        echo 'Hello World';
    }],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];
