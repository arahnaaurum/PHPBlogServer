<?php

namespace App\Blog\Http\Actions;

use App\Blog\Http\Request;
use App\Blog\Http\Response;

interface AddLikeToPostInterface extends ActionInterface
{
    public function handle(Request $request): Response;
}