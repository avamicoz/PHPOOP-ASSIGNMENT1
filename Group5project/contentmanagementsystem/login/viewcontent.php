<!DOCTYPE html>
<html>
<head>
  <title>Example:Display json Data to HTML Table</title>
  <link rel="stylesheet" type="text/css" href="styleview.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
 
  </style>
</head>
<body>
  <h1>My Contents</h1>
  <table id="data-table">
    <thead>
      <tr>
      <th>#</th>
        <th>Image</th>
        <th>Title</th>
        <th>Product Name</th>
        <th>Complain Text</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
 
  <?php
$content = file_get_contents("content.json");
$contentdata = json_decode($content, true);



$sn=0;
           foreach($contentdata as $key =>$row){
$sn++;
?>
 
                    <table>
                    <tr>
                    <td><?php echo $sn; ?></td>
					<td><?php echo $row["image"];?>
                    <td><?php echo $row["title"];?></td>
                    <td><?php echo $row["tags"];?></td>
					<td><?php echo $row["content"];?></td>
                    </tr>
                    </table>
  
				<?php
           }
                ?>
 
  
</body>
</html>