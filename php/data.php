<?php
while ($row = mysqli_fetch_assoc($sql)) {      // looping through each
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
            OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
            OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2  = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) >  0){     // check if there is a message for this unique id
        $result = $row2['msg'];
    }else{
        $result = "No Messages Available";
    }

    // trimming message  to fit the div width and adding html tags
    (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
    //adding you: text before message if message is sent from logged in ID 
    $you ="";
    //($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: "  : $you = "";

    if ($row2 && isset($row2['outgoing_msg_id'])) {
        $you = ($outgoing_id == $row2['outgoing_msg_id']) ? "You: " : "";
    }
    // Check user is  online or not
    ($row['status'] == "Offline Now") ? $offline="Offline" : $offline="";


    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
            <div class="content">
                <img src="php/images/'. $row['img'] .'" alt="">
                <div class="details">
                    <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                    <p>'. $you . $msg .'</p>
                </div>
            </div>
            <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
        </a>';
}
?>