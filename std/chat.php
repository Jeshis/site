<?php
include 'header.php';
require '../database/dbconnect.php';
// $stmt = $db->prepare('SELECT id, username FROM users');
// $stmt->execute();
// return $stmt->fetchAll();
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
            <input type="submit" value="Chat" id="submit-btn">
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
                    $sender_query = "SELECT username FROM users WHERE id = {$row['sender_id']}";
                    $sender_result = mysqli_query($conn, $sender_query);
                    $sender_name = mysqli_fetch_array($sender_result)['username'];
                    echo "<li>" . $sender_name . ": " . $row['message'] . "</li>";
                }
            }
            ?>
        </ul>
    </section>
    <section class="message-input">
            <form action="chat.inc.php" method="post">
                <label for="message">Enter Message:</label>
                <input type="text" id="message" name="message">
                <input type="hidden" name="sender_id" value="<?php echo $_SESSION['userid']; ?>">
                <input type="hidden" name="receiver_id" value="<?php echo $_POST['receiver']; ?>">
                <input type="submit" value="Send" id="send-btn" name="submit">
            </form>
    </section>
</main>
<!-- <script>
    $(document).ready(function() {
        $("form").submit(function(e) {
            e.preventDefault();
            var message = $("#message").val();
            var sender = $("input[name=userid]").val();
            var receiver = $("input[name=receiver]").val();
            $.ajax({
            type: "POST",
            url: "chat.inc.php",
            data: {
                message: message,
                sender_id: sender,
                receiver_id: receiver
            },
            success: function(data) {
                // code to update the chat messages
                $("#messages").append(data);
            }
        });
    });
</script> -->


<?php
include_once('../footer.php');
?>