<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class EventTypesController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'title'
        ]
    ];
}
