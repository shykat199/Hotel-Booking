<?php

function roomCategories()
{
    $items = \App\Models\Categorie::select('name', 'id')->get();

    return $items;
}

function ourService()
{
    $ourService = \App\Models\Services::select('title', 'id')->get();

    return $ourService;
}
