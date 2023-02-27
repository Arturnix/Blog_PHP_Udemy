<?php

require 'includes/init.php';

Auth::logout();

Url::redirect('/OOP/?page=1');
