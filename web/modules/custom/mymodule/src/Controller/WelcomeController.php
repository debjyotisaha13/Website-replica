<?php
namespace Drupal\mymodule\Controller;

class WelcomeController {
    public function welcome(string $user) {
        return array (
            '#markup' => '<h2>Hello, '.$user.'</h2>Welcome to the site'
        );
    }
}