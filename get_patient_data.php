<?php

$conn = mysqli_connect('localhost','root','','hospital_management_system');
 $patient = "SELECT * FROM register";
 $run_patient = mysqli_query($conn,$patient);

 while($row_patient=mysqli_fetch_array($run_patient)){
    $patient_id = $row_patient['id'];
    $patient_name = $row_patient['Name'];

    echo"
      <li>
          <div class='chat-left-detail'>
            <p> <a href='manageAppointmentDoctor.php?user_name=$patient_name'>$patient_name</a> </p>";
          "
            </div>
            </li>
    ";

 }

 ?>
