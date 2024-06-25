<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
        $allowed = array("pdf" => "application/pdf");
        $filename = $_FILES['pdf']['name'];
        $filetype = $_FILES['pdf']['type'];
        $filesize = $_FILES['pdf']['size'];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) {
            die("Error: Please select a valid file format.");
        }

        if (in_array($filetype, $allowed)) {
            if ($filesize > 5242880) {
                die("Error: File size is larger than the allowed limit.");
            }

            $target_directory = "uploads/";
            if (!file_exists($target_directory)) {
                mkdir($target_directory, 0777, true);
            }

            $target_file = $target_directory . basename($filename);
            if (file_exists($target_file)) {
                echo "Error: File already exists.";
            } else {
                if (move_uploaded_file($_FILES['pdf']['tmp_name'], $target_file)) {
                    $_SESSION['pdf'] = $target_file;
                    header("Location: dashboard.php");
                } else {
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
            }
        } else {
            echo "Error: There was a problem with your upload. Please try again.";
        }
    } else {
        echo "Error: " . $_FILES['pdf']['error'];
    }
}
?>
