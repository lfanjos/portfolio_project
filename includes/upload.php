<?php require_once('./config.php');
echo("upload.php loaded <br/>");

if(isset($_POST['submit'])){
    
    $filename = $_FILES['image']['name'];
    $filename2 = $_FILES['image2']['name'];

    $target_dir = "upload/";

    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);


    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png","gif");


    if (in_array($imageFileType,$extensions_arr) && in_array($imageFileType2,$extensions_arr) ){

        $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']) );
        $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
        $image2_base64 = base64_encode(file_get_contents($_FILES['image2']['tmp_name']) );
        $image2 = 'data:image/'.$imageFileType2.';base64,'.$image2_base64;
        $title = $_POST['title'];
        $description = $_POST['description'];
        $tags = $_POST['tags'];
        $query = "INSERT INTO tb_posts (title, image_thumb, main_image, description, tags) 
        values('".$title."', '".$image."','".$image2."', '".$description."', '".$tags."')";
        mysqli_query($conn,$query);
    }else{
        echo("A imagem precisa ser jpg, jpeg, png, gif.");

    }
}

?>

