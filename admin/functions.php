<?php

function update_settings_query($settings){
  $sql = "";
  foreach ($settings as $key => $value) {
      $sql .= "update settings set value='$value' where name='$key';";
  }
  return $sql;
}


function update_password_query(){
  return "update settings set value=? where name='password'";
}

?>
