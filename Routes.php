<?php

// This is the index page. The first route.
Route::set('/', function() 
{
  View::fetch('main');
});


// // This is a route for the User Login / Registration popup.
// Route::set('popups/user-login', function() {
//   View::fetch('popupUserLogin');
// });
// /*
//  * This is an example of a dynamic route. In this example,
//  * this route would display a users profile page.
// */
// Route::set('user/<1>', function() {
//   View::fetch('UserProfile');
// });
