<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


//Default Controller: Hogwarts controller
$route['default_controller'] = 'Hogwarts';

//Error Controller: show a ramdom quote
$route['404_override'] = 'Hogwarts/random';
$route['translate_uri_dashes'] = FALSE;

//wildcard routing
$route['lock/em/up'] = "Hogwarts/shucks";
//regex routing
$route['comp(\d{4})/.*'] = "wise/bingo";
// sleep routing
$route['sleep'] = 'first/zzz';


//Wildcard routing: pass a digit as parameter
$route['show/(:num)'] = 'first/gimme/$1';

// call back routing
$route['dunno'] = function() {
    //$source = '../data/surprise.jpg'; // an image you provide, outside of "public"!
    // set the mime type for that image (jpeg, png, etc)

    $dir ="../data/";
    $sourcePic = scandir($dir);
    $num = rand(2, sizeof($sourcePic) - 1);
    $img = $sourcePic[$num];

    header("Content-type: image/jpeg");
    header('Content-Disposition: inline');
    readfile($dir . $img); // dish it
    die(); // and we don't have to go any further

};

// regular expression routing
$route['([a-zA-Z]{4})/bingo'] = 'bingo';
      




