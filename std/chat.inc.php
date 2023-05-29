<?php 
include 'header.php';
require '../database/dbconnect.php';


if(isset($_POST['submit'])) {
    $message = $_POST['message'];
    if (!empty($message)) {
        $active_user = $_SESSION['userid'];
        $selected_user = $_POST['receiver_id'];
        $query = "INSERT INTO messages (sender_id, receiver_id, message) VALUES ('$active_user', '$selected_user', '$message')";
        $result = mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            echo "Message Sent Successfully!";
        } else {
            echo "Error: Message not sent";
        }
    }
}
    $active_user = $_SESSION['userid'];
    $selected_user = $_POST['receiver'];
    $query = "SELECT * FROM messages WHERE (sender_id = '$active_user' AND receiver_id = '$selected_user') OR (sender_id = '$selected_user' AND receiver_id = '$active_user') ORDER BY created_at ASC";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)) {
      $sender_query = "SELECT username FROM users WHERE id = {$row['sender_id']}";
      $sender_result = mysqli_query($conn, $sender_query);
      $sender_name = mysqli_fetch_array($sender_result)['username'];
      echo "<li>" . $sender_name . ": " . $row['message'] . "</li>";
    }
?>
<main>
<style>
  .return-button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
</style>

<form>
  <input type="button" class="return-button" value="Return to chat page" onclick="window.location.href = 'http://localhost/cryptography/std/chat.php';" />
</form>
</main>
