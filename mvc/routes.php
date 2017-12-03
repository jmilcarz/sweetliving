<?php
Route::set('index.php', function() {
     PagesController::CreateView('index');
});
Route::set('home', function() {
     PagesController::CreateView('index');
});
Route::set('start', function() {
     PagesController::CreateView('index');
});

?>
