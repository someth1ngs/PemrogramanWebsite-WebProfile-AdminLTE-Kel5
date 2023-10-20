<?php

namespace Phppot;



class Registration
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/DataSource.php';
        $this->ds = new DataSource();
    }

    /**
     * @param string $username
     * @param string $id_member
     * @return boolean
     **/
    public function isUsernameExists($username)
    {
        $query = 'SELECT * FROM member where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    /**
     * @param string $email
     * @return boolean
     **/
    public function isEmailExists($email)
    {
        $query = 'SELECT * FROM member where email = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    /**
     * @return string[] registration status message
     **/

    public function registerMember()
    {
        $isUsernameExists = $this->isUsernameExists($_POST["username"]);
        $isEmailExists = $this->isEmailExists($_POST["email"]);

        if ($isUsernameExists) {
            $response = array(
                "status" => "error",
                "message" => "Username already exists."
            );
        } else if ($isEmailExists) {
            $response = array(
                "status" => "error",
                "message" => "Email already exists."
            );
        } else {
            if (!empty($_POST["signup-password"])) {
                $hashedPassword = password_hash($_POST["signup-password"], PASSWORD_DEFAULT);
            }

            // Mendapatkan id_member terakhir dari database
            $query = "SELECT id_member FROM member ORDER BY id_member DESC LIMIT 1";
            $paramType = '';
            $paramValue = array();
            $resultArray = $this->ds->select($query, $paramType, $paramValue);
            $nextKodeCustomer = 'C001'; // Default value jika tidak ada id_member sebelumnya

            if (is_array($resultArray) && count($resultArray) > 0) {
                $lastKodeCustomer = $resultArray[0]['id_member'];
                $lastNumber = (int)substr($lastKodeCustomer, 1); // Mengambil angka dari id_member terakhir
                $nextNumber = $lastNumber + 1;
                $nextKodeCustomer = 'C' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT); // Membuat id_member baru
            }

            $query = 'INSERT INTO member (id_member, username, password, email) VALUES (?, ?, ?, ?)';
            $paramType = 'ssss';
            $paramValue = array(
                $nextKodeCustomer,
                $_POST["username"],
                $hashedPassword,
                $_POST["email"]
            );
            $memberId = $this->ds->insert($query, $paramType, $paramValue);

            if (!empty($memberId)) {
                $response = array(
                    "status" => "error",
                    "message" => "Registration failed."
                );
            } else {

                $response = array(
                    "status" => "success",
                    "message" => "You have registered successfully."
                );
            }
        }

        return $response;
    }

    public function getMember($username)
    {
        $query = 'SELECT * FROM member where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    /**
     * @return string
     **/
    public function loginMember()
{
    if (!empty($_POST["username"]) && !empty($_POST["login-password"])) {
        $memberRecord = $this->getMember($_POST["username"]);
        $loginPassword = 0;

        if (!empty($memberRecord)) {
            $password = $_POST["login-password"];
            $hashedPassword = $memberRecord[0]["password"];

            if (password_verify($password, $hashedPassword)) {
                $loginPassword = 1;
            }
        }

        if ($loginPassword == 1) {
            session_start();
            $_SESSION["id_member"] = $memberRecord[0]["id_member"];
            $_SESSION["username"] = $memberRecord[0]["username"];
            
            if ($_SESSION['username'] == 'admin') {
                $url = "./admin/app/Adventurworks/index.php";
            } else {
                $url = "./logout-form.php";
            }
            header("Location: $url");
            exit;
        } else {
            $loginStatus = "Invalid username or password.";
            return $loginStatus;
        }
    }
}
}