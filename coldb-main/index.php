<?php

require_once 'connect.php';

?>
<head>
      <title>Students</title>
</head>
<body>
  <?php

  $query = ("insert into students values('id.value','imya.value','familiya.value','gruppa.value')");
  $students = mysqli_query($connect,$query);


  ?>
      <table>
            <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Group</th>
            </tr>
            <form action="$students">
              <br>
              <input type="text" name="id">
              <br>
              <input type="text" name="imya">
              <br>
              <input type="text" name="familiya">
              <br>
              <input type="text" name="gruppa">
              <br>
              <button type="submit" method=[POST]>submit</button>
            </form>


<?php
      $query = ("SELECT * FROM `students`");
      $students = mysqli_query($connect,$query);
      $students = mysqli_fetch_all($students);
      foreach ($students as $students) {
        ?>
          <tr>
                <td><?= $students[0] ?></td>
                <td><?= $students[1] ?></td>
                <td><?= $students[2] ?></td>
                <td><?= $students[3] ?></td>  
            </tr>
            <?php
      }



?>
      </table>
</body>
</html>
