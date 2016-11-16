<?php
  include_once 'CSVExceptionHandling.php';
  echo '<h3>Exception Handling</h3>';
  $fname = "contacts.csv";
  echo 'The name of the file I will use is: ' . $fname;
  $file = new CSVExceptionHandling();
  echo '<br>Will now check if the file exists:<br>';
  $file->exists($fname);
  echo '<br>Will now check if the file is writeable:<br>';
  $file-> canWrite($fname);
  echo '<br>Will now attempt to write to the file:<br>';
  $list = array("Homer,Simpson,Ned,Flanders","Chief,Wiggums,Bart,Simpson",);
  $file->write($fname, $list);
?>