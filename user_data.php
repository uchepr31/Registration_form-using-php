<link rel="stylesheet" href="style.css">
<div class = 'for_the_user_data'>

    <?php
        echo 'Thank you' . "\n" . $_POST['name']. ',' .  "\n" . 'here are your details' . '<br>' . '<br>'  . 
            '<strong>Name:</strong>' . "\n" . $_POST['name'] . '<br>' .  '<br>' .
            '<strong>Email:</strong>' . "\n" . $_POST['email'] . '<br>' . '<br>' .
            '<strong>DOB:</strong>' . "\n" . $_POST['dob'] . '<br>' . '<br>' .
            '<strong>Gender:</strong>' . "\n" . $_POST['gender'] . '<br>' . '<br>' .
            '<strong>Country:</strong>' . "\n" . $_POST['country'] ;

      $file_open = fopen("userdata.csv", "a");
      $no_rows = count(file("userdata.csv"));
      if($no_rows > 1)
      {
      $no_rows = ($no_rows - 1) + 1;
      }

     fputcsv($file_open, $_POST); //this is used to convert the opened file into a .csv file format and then write something into the file
     fclose($file_open);

    ?>


</div>


