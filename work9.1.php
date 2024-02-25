<?php
Route::get('/user/{id?}', function ($id = 0) {
    return "ID пользователя: $id";
});
