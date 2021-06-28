else {
                $sql2 = "SELECT * FROM messages
                        LEFT JOIN doctor ON patient.unique_id = messages.outgoing_msg_id
                        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                        OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id ";
                $query2 = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($query2)>0){
                    while($row2 = mysqli_fetch_assoc($query2)){
                        if($row2['outgoing_msg_id']===$incoming_id){
                            $output .= '<div class="chat incoming">
                                <img src="../../Patient/PHP/images/'. $row2['img'] . '" alt="">
                                <div class="details">
                                <p>' . $row2['img'] . '</p>
                                <p>' . $row['msg'] . '</p>
                                <p> '.$outgoing_id.'<p>
                                <p> '.$incoming_id.'<p>
                                </div>
                                </div>';
                        }
                    }
                }