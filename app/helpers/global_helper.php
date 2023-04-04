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

function getSettingsData($input = null)
{
    if (empty($input)) {
        $data = \App\Models\Settings::get()->pluck('value', 'name')->toArray();
    } elseif (is_array($input)) {
        $data = \App\Models\Settings::whereIn('name', $input)->get()->pluck('value', 'name')->toArray();
    } else {
        $item = \App\Models\Settings::where('name', $input)->first();

        $data[$input] =  empty($item) ? '' : $item->value;
    }

    return $data;
}

function getFacebookLink()
{
    $item = \App\Models\Settings::where('name', 'facebook')->first();

    return empty($item) ? '' : $item->value;
}
function getYoutubeLink()
{
    $item = \App\Models\Settings::where('name', 'youtube')->first();

    return empty($item) ? '' : $item->value;
}
function getEmailLink()
{
    $item = \App\Models\Settings::where('name', 'email')->first();

    return empty($item) ? '' : $item->value;
}
function getAboutLink()
{
    $item = \App\Models\Settings::where('name', 'about_us')->first();

    return empty($item) ? '' : $item->value;
}
function getInstagramLink()
{
    $item = \App\Models\Settings::where('name', 'instagram')->first();

    return empty($item) ? '' : $item->value;
}
function getTwitterLink(){
    $item = \App\Models\Settings::where('name','twitter')->first();
    return empty($item) ? '' : $item->value;
}

function getAddressLink(){
    $item = \App\Models\Settings::where('name','address')->first();
    return empty($item) ? '' : $item->value;
}

function getPhoneLink(){
    $item = \App\Models\Settings::where('name','phone')->first();
    return empty($item) ? '' : $item->value;
}

function getLogoLink(){
    $item = \App\Models\Settings::where('name','logo')->first();
    return empty($item) ? '' : $item->value;
}
