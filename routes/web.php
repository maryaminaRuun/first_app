<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rezacreative', function () {
    $rezacreative = [
        ['name' => 'Reza Creative 1', 'description' => 'This is the first Reza Creative item.'],
        ['name' => 'Reza Creative 2', 'description' => 'This is the second Reza Creative item.'],
        ['name' => 'Reza Creative 3', 'description' => 'This is the third Reza Creative item.'],
    ];

    return view('test.index', [
        "greeting" => "Welcome to Reza Creative!",
        "rezacreative" => $rezacreative
    ]);
});

Route::get('/rezacreative/create', function () {
    return view('test.create');
});

Route::get('/rezacreative/{id}', function ($id) {
    return view('test.show', ["id" => $id]);
});
