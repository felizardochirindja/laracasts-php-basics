<?php

$heading = $_SESSION['email'] ?? false ? "Hello " . $_SESSION['email'] : 'Welcome';

renderView('pages/views/home', [
    'heading' => $heading,
]);