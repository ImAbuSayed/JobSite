<?php

// Redirect to Page
function redirect($page = NULL, $message = NULL, $message_type = NULL)
{
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

// Display Message

    function displayMessage()
{
    if (!empty($_SESSION['message'])) {
        $message = $_SESSION['message'];
        if (!empty($_SESSION['message_type'])) {
            if ($_SESSION['message_type'] == 'error') {
                echo '<div class="alert alert-danger">' . $message . '</div>';
            } else {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }
        // unset message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    } else {
        echo '';
    }
}

