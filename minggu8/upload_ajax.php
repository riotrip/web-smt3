<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");

    foreach ($$_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (in_array($file_ext, $extensions) == false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, dan GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File berhasil diunggah";
        } else {
            echo implode(" ", $errors);
        }
    }
}
?>