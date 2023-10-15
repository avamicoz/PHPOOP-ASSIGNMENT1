<?php

if(isset($_POST['submit'])){

    if(isset($_POST['title']) && !empty(($_POST['title']))){
        $title = $_POST['title'];
    }

    if(isset($_POST['image']) && !empty(($_POST['image']))){
        $image = $_POST['image'];
    }
    if(isset($_POST['tags']) && !empty(($_POST['tags']))){
        $tags= $_POST['tags'];
    }
    if(isset($_POST['content']) && !empty(($_POST['content']))){
        $content = $_POST['content'];
    }
    


$titledata = file_get_contents ('content.json');
$datalist = json_decode($titledata); 
$profile=array(
    'id'=>count ($datalist),
    'title'=>$title,
    'image'=>$image,
    'tags'=>$tags,
    'content'=>$content,
);

array_push($datalist, $profile);
$en_datalist = json_encode($datalist);

file_put_contents ('complain.json', $en_datalist);


echo "<script>
alert('information submitted');

window.location = 'add.html'
</script>";



}

?>