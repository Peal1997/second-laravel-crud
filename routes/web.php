<?php

use Illuminate\Support\Facades\Route;

Route :: get('app', function(){
    return view('app');
});
Route :: get('home', function(){
    return view('index');
});
Route :: get('add', function(){
    return view('create');
});
Route :: get('single', function(){
    return view('single');
});
Route :: get('edit', function(){
    return view('edit');
});