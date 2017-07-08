<?php

//Route du controller de la page d'accueil

Route::name('root_path')->get('/', 'PagesController@home');

//Route du controller de la page About

Route::name('about_path')->get('/about', 'PagesController@about');