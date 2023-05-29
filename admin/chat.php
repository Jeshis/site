<?php 
include 'header.php';

require '../database/dbconnect.php';
?>


<main>
    <section class="user-select">
      <form action="chat.php" method="post">
        <label for="receiver">Select User:</label>
        <select id="receiver" name="receiver">
        <?php
            $userid = $_SESSION['userid'];

            $users = mysqli_query($conn, "SELECT * FROM users WHERE id !={$userid}");
            while($user=mysqli_fetch_array($users)){
            echo '<option value="' . $user['id'] . '">' . $user['username'] . '</option>';
          }
        ?>
        </select>
        <input type="submit" value="Chat">
      </form>
    </section>
    <section class="chat-messages">
      <ul id="messages">
        <?php
        if(isset($_POST['receiver'])) {
          $active_user = $_SESSION['userid'];
          $selected_user = $_POST['receiver'];
          $query = "SELECT * FROM messages WHERE (sender_id = '$active_user' AND receiver_id = '$selected_user') OR (sender_id = '$selected_user' AND receiver_id = '$active_user')";
          $result = mysqli_query($conn, $query);
          while($row = mysqli_fetch_array($result)) {
            echo "<li>" . $row['sender_id'] . ": " . $row['message'] . "</li>";
          }
          // retrieve selected user's data from the users table
          $query = "SELECT * FROM users WHERE id = '$selected_user' ";
          $result = mysqli_query($conn, $query);
          $selected_user_data = mysqli_fetch_array($result);
          // you can use this selected_user_data to display the user's data like name, username etc.
        }
        ?>
      </ul>
    </section>
    <section class="message-input">
      <form action="chat.inc.php" method="post">
        <label for="message">Enter Message:</label>
        <input type="text" id="message" name="message">
        <input type="hidden" name="sender" value="<?php echo $_SESSION['userid']; ?>">
        <input type="hidden" name="receiver" value="<?php echo $_POST['receiver']; ?>">
        <button type="submit" class="btn-submit" name="submit">Send</button>
      </form>
    </section>
</main>

<br>
<br>
<?php
include_once('../footer.php');
?>

