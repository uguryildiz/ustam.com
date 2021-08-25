<?php
include "../common/db.php";

$sql = "INSERT INTO mesaj (gonderen, baslik, icerik)
VALUES ('".$_POST['gonderen']."', '".$_POST['baslik']."', '".$_POST['icerik']."')";

if ($conn->query($sql) === TRUE) {
  header("Location: contact.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>