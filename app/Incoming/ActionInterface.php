<?php

namespace App\Incoming;

interface ActionInterface
{
    public function execute($data);
    public function heading($data);
}