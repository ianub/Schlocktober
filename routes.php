<?php

namespace App\Controllers;

  // If there is "page" in the address bar then $page = that page
  // otherwise $page = home
  
  $page = isset($_GET['page']) ? $_GET['page'] : "home";

  switch ($page) {
    
    case 'home':

      $controller = new HomeController();
      $controller->show();
      break;
    
    case 'about':
      
      $controller = new AboutController();
      $controller->show();
      break;

    case 'movies':

      $controller = new MoviesController();
      $controller->showAll();
      break;

    case 'featuredmovie':

      $controller = new MoviesController();
      $controller->showFeaturedMovie();
      break;

    case 'movie.create':

      $controller = new MoviesController();
      $controller->create();
      break;

    case 'movie.store':

      $controller = new MoviesController();
      $controller->store();
      break;
    
    case 'moviesuggest':

      $controller = new MovieSuggestController();
      $controller->show();      
      break;

    case 'moviesuggestsuccess':
     
     $controller = new MovieSuggestController();
     $controller->generateSuccessPage();
     break;

    case 'merchandise':

      $controller = new MerchandiseController();
      $controller->showAll();
      break;

    case 'register':

      $controller = new RegisterController();
      $controller->show();
      break;

    case 'register.store':

      echo '<pre>';
      print_r($_POST);
      break;

    default:
      echo "Error 404 ! Page not found !";
      break;
  }











