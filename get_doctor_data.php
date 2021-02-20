<?php

$conn = mysqli_connect('localhost','root','','hospital_management_system');
 $doctor = "SELECT * FROM doctor";
 $run_doctor = mysqli_query($conn,$doctor);

 while($row_doctor=mysqli_fetch_array($run_doctor)){
    $doctor_id = $row_doctor['id'];
    $doctor_name = $row_doctor['name'];

    echo"
      <li>
          <div class='chat-left-detail'>
            <p> <a href='manageAppointmentPatient.php?doctor_name=$doctor_name'>$doctor_name</a> </p>";
          "
            </div>
            </li>
    ";

 }

 ?>
