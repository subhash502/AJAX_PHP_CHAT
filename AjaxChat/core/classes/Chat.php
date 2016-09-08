<?php 
class Chat extends Core {
    public function fetchMessages() {
        //query db
        $this->query("
            SELECT `chat`.`message`,
                    `users`.`username`,
                    `users`.`user_id`
            FROM    `chat`
            JOIN    `users`
            ON      `chat`.`user_id` = `users`.`user_id`
            ORDER BY `chat`.`timestamp`
            DESC
        ");
        //return rows
        return $this->rows();
    }
    
    public function throwMessage($user_id, $message) {
        //insert into db
        $this->query("
            INSERT INTO `chat` (`user_id`, `message`, `timestamp`)
            VALUES (" . (int)$user_id . ", '" . $this->db->real_escape_string(htmlentities($message)) . "', UNIX_TIMESTAMP())
        ");
    }
}
