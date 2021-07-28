 
  <!-- Mousumi Mondal , class roll-40 -->


<?php
$info=$_FILES["myfile"]; 
$count=count($info["name"]);

for ($i=0;$i<$count;$i++)
{ if ($info["error"][$i]!=0) die ("error in uploading");
if (preg_match("/.+\.(php|jpg|pdf|doc|txt|docx|png)$/",$info["name"][$i]))
  { $dir="files/".$info["name"][$i];
    if (move_uploaded_file($info["tmp_name"][$i],$dir))
    print "File ".$info["name"][$i]." is uploaded <br>";
   else print "file upload failed <br>";
  }
else print "wrong file extension for ".$info["name"][$i]." <br>";
}

?>
