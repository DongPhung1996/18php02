<?php

include "user.php";

class Session{
    public function createSession(){
        session_start();
    }

    public function logUser($id){
        $_SESSION['id'] = $id;

        $selector = base64_encode(random_bytes(8));
        $token = bin2hex(random_bytes(32));

        $cookieValue = $selector.':'.base64_encode($token);
        $hashedToken = hash('sha256', $token);

        $timestamp = time() + (86400 * 14);

        setcookie('authToken', $cookieValue, $timestamp, NULL, NULL, NULL, true);

        $connection = new Connection;
        $db = $connection->openConnection();

        $stmt = $db->query("INSERT INTO logins (login_selector, login_token, login_userId, login_expires) VALUES ('$selector', '$hashedToken', '$userId', '$timestamp')");
    }

    public function relogUser($userId){
        $_SESSION['userId'] = $userId;
    }

    public function isLogged(){
        if(isset($_SESSION['userId'])){
            return true;
        }else{
            if(isset($_COOKIE['authToken'])){
                $connection = new Connection;
                $db = $connection->openConnection();

                list($selector, $token) = explode(':', $_COOKIE['authToken']);

                $stmt = $db->prepare('SELECT * FROM logins WHERE login_selector = :login_selector');
                $stmt->bindValue(':login_selector', $selector);

                $stmt->execute();
                $results = $stmt->fetch();

                if($results){
                    if(hash_equals($results['login_token'], hash('sha256', base64_decode($token)))){
                        $this->relogUser($results['login_userId']);
                    }else{
                        $this->logOut();
                        return false;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
    }

    public function logOut(){
        $connection = new Connection;
        $db = $connection->openConnection();

        list($selector, $token) = explode(':', $_COOKIE['authToken']);

        $stmt = $db->prepare('DELETE FROM logins WHERE login_selector = :login_selector');
        $stmt->bindValue(':login_selector', $selector);

        $stmt->execute();

        $stmt = $db->prepare('DELETE FROM logins WHERE login_userId = :login_userId');
        $stmt->bindValue(':login_userId', $_SESSION['userId']);

        $stmt->execute();

        unset($_SESSION['userId']);
        setcookie('authToken', '', 1);
        unset($_COOKIE['authToken']);
    }

    public function getId(){
        return $_SESSION['userId'];
    }
}

?>