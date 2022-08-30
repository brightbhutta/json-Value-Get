<?php
  // JSON string
  $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

  // Convert JSON string to Object
  $someObject = json_decode($someJSON);
  echo $someObject[0]->name; // Access Object data
?>