<?php 

if(isset($_POST['create'])){
    $fileName = $_POST['fileName'];
    $fileExtension = $_POST['fileExtension'];
    $fileContent = $_POST['fileContent'];

    $filepath = "files/". $fileName . $fileExtension;

    if(!file_exists($filepath)){
        if(touch($filepath)){
            echo "File created";
        }else {
            echo "Error creating file";
        }
    }else{
        echo "File Already exists";
    }
}

if (isset($_POST['delete'])){
    $filePath = $_POST['fileToDelete'];

    if(file_exists($filePath)){
        if(unlink($filePath)){
            echo "file Deleted";
        }else{
            echo "could not delete file";
            header("Location: index.php");
        }
        
    }else {
        echo "File not found";
    }
}

if(isset($_POST['rename'])){
    $oldName = $_POST['oldFileName']; //folder/filename
    $newName = $_POST['newFileName']; //folder/newName

    $newpath = 'files/'.$newName;

    if(rename($oldName, $newpath)){
        echo "File renamed!";
    }else{
        echo "Could not rename file";
    }
}

if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileDestination = 'uploads/' . $fileName;

    if (move_uploaded_file($fileTmpName, $fileDestination)) {
        echo "<p>File uploaded successfully!</p>";
    } else {
        echo "<p>Failed to upload file.</p>";
    }
}
