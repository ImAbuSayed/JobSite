<?php

// Redirect to Page
function redirect($page = NULL, $message = NULL, $message_type = NULL){
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    // Check for message
    if ($message != NULL) {
        $_SESSION['message'] = $message;
    }

    // Check for Type
    if ($message_type != NULL) {
        $_SESSION['message_type'] = $message_type;
    }

    // Redirect
    header("Location: {$location}");
    exit;
}