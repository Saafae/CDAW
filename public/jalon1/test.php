<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>JSON</title>
  <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
  <meta name="description" content="HTML, PHP, JSON, REST API">
  <style>table, th, td {border: 1px solid black;}</style>
</head>
  <body>
    <?php foreach ($arrays as $key => $value)  {    ?>
      <div  style="width:80px;border:2px solid black;height:20px;"> <?php echo 'User ID: ' . $value -> userId ?> </div><br /> 
      <div style="width:50px;border:2px solid black;height:20px;"> <?php echo 'ID: ' . $value -> id ?> </div><br /> 
      <div style="width:550px;border:2px solid black;height:20px;"> <?php echo 'Title: ' . $value -> title ?> </div><br /> 
      <div style="width:90px;border:2px solid black;height:20px;"> <?php echo 'Completed: ' . $value -> completed ?> </div><br /> 
      <br />   <?php  } ?>

        <table table style="width:100%"; table class="data-table">

                     <tr>
                          <th> User ID:</th> <th>ID:</th> <th>Title:</th><th>Completed</th>
                      </tr>

                     <tr>
                         <td><?php echo $value -> userId ?> </td> <td><?php echo $value -> id ?> </td> <td><?php echo $value -> title ?> </td><td><?php echo $value -> completed ?> </td>
                      </tr>

                      <tr>
                         <td><?php echo $value -> userId ?> </td> <td><?php echo $value -> id ?> </td> <td><?php echo $value -> title ?> </td><td><?php echo $value -> completed ?> </td>
                     </tr>

               </table>

  </body>
</html>