<?php

    if(isset($_FILES['image'])) { 
        # 'image' corresponds to line 74 of File_Upload.html, where we mentioned a name/identification for this
        # particular file upload
        # So $_FILES['image'] will contain an associative array like shown below:

        $file = $_FILES['image'];
        $file_name = $file['name']; #name of the file
        $file_type = $file['type']; #type of the file
        $file_size = $file['size']; #size of the file in bytes
        $file_tmp_name = $file['tmp_name']; #temporary name for storage
        $file_error = $file['error']; #errors associated with the file

        $ext = explode('.', $file_name); #function to split file name at the ., thus giving us the extension
        $act_ext = strtolower(end($ext)); #conversion to lowercase giving us the actual extension

        $allow = array('jpeg', 'jpg', 'png',); #list of allowed extensions in this form

        #Potential errors with the file
        if(!(in_array($act_ext, $allow))) 
            echo "Invalid file type." . "<br>";
        
        else if (!($file_error === 0)) 
            echo "There was an error uploading your file" . "<br>";

        else if($file_size > 5242880)
            echo "File too big" . "<br>";

        #if no errors with the file
        else {
            #Generate unique id for uploaded file to avoid 
            #file overwriting in case 2 files of the same name
            #are uploaded
            #true allows for a time format based id to ensure uniqueness
            #then, we add the extension to the file
            $new_fname = uniqid('', true).".".$act_ext; 

            #define the destination we want
            $destination = 'C:/xampp/htdocs/ak travels/upload'.$new_fname;

            #now, to move it from the temp location to destination
            move_uploaded_file($file_tmp_name, $destination);

            #optional success message
            // header("Location: web_tech_lab1.php?uploadsuccess");
        }
    }

?>