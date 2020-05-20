<?php
if (isset($_SESSION['quiz'])) {
  if (!empty($_SESSION['quiz'])) {
    $results = [];
    $correct_answers = parse_ini_file('answers.ini');
    foreach ($correct_answers as $key => $value) {
      $results[$key] = ['user_answers' => $_SESSION['quiz'][$key], 'correct_answers' => $value];
      //var_dump($results);
    }
  }
}

session_destroy();
 
?>

<h4 style="text-align: center" > Your result is: </h4>
<table class="table">
  <thead>
    <tr>
      <th >Question</th>
      <th >Your answer</th>
      <th >Correct answer</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <?php
      foreach ($results as $key => $value) {
        if ($value['user_answers'] == $value['correct_answers']) {
          echo '<tr style="background-color:green">';
        }else {
          echo '<tr style="background-color:red">';
        }
        echo '<td>'.$key.'</td>';
        echo '<td>'.$value['user_answers'].'</td>';
        echo '<td>'.$value['correct_answers'].'</td>';
        echo '</tr>';
      }
    ?>
  </tr>
  </tbody>
</table>

 