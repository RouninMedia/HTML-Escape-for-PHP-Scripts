<?php

  //************************************//
 // INITIALISE AND SANITISE FORM DATA  //
//************************************//

function HTML_Escape($String) {

  $String = str_replace('\'', '&#39;', $String);
  $String = str_replace('"', '&quot;', $String);
  $String = str_replace('<', '&lt;', $String);
  $String = str_replace('>', '&gt;', $String);
  $String = str_replace('{', '&#123;', $String);
  $String = str_replace('}', '&#125;', $String);
  $String = str_replace('[', '&#91;', $String);
  $String = str_replace(']', '&#93;', $String);
  $String = str_replace(['\%', '%'], '&#37;', $String);
  $String = str_replace('*', '&#42;', $String);
  $String = str_replace(["\r\n", "\r", "\n"], '␤', $String);

  return $String;
}

$myData = HTML_Escape(htmlspecialchars($_POST['my-data'], ENT_NOQUOTES, 'UTF-8', FALSE));

?>
