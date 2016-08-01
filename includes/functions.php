<?php

class Users
{
    public $tableName = 'login_logs';
    public $user_table_Name = 'user';

    function __construct()
    {
        //database configuration
        $dbServer = 'localhost'; //Define database server host
        $dbUsername = 'root'; //Define database username
        $dbPassword = 'root'; //Define database password
        $dbName = 'dms'; //Define database name

        //connect databse
        $con = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
        if (mysqli_connect_errno()) {
            die("Failed to connect with MySQL: " . mysqli_connect_error());
        } else {
            $this->connect = $con;
        }
    }

    function checkUser($oauth_provider, $oauth_uid, $fname, $lname, $email, $gender, $locale, $link, $picture)
    {
        $prevQuery = mysqli_query($this->connect, "SELECT * FROM $this->tableName WHERE oauth_provider = '" . $oauth_provider . "' AND oauth_uid = '" . $oauth_uid . "'") or die(mysqli_error($this->connect));
        if (mysqli_num_rows($prevQuery) > 0) {
            $update = mysqli_query($this->connect, "UPDATE $this->tableName SET oauth_provider = '" . $oauth_provider . "', oauth_uid = '" . $oauth_uid . "', fname = '" . $fname . "', lname = '" . $lname . "', email = '" . $email . "', gender = '" . $gender . "', locale = '" . $locale . "', picture = '" . $picture . "', gpluslink = '" . $link . "', modified = '" . date("Y-m-d H:i:s") . "' WHERE oauth_provider = '" . $oauth_provider . "' AND oauth_uid = '" . $oauth_uid . "'") or die(mysqli_error($this->connect));
        } else {
            $insert = mysqli_query($this->connect, "INSERT INTO $this->tableName SET oauth_provider = '" . $oauth_provider . "', oauth_uid = '" . $oauth_uid . "', fname = '" . $fname . "', lname = '" . $lname . "', email = '" . $email . "', gender = '" . $gender . "', locale = '" . $locale . "', picture = '" . $picture . "', gpluslink = '" . $link . "', created = '" . date("Y-m-d H:i:s") . "', modified = '" . date("Y-m-d H:i:s") . "'") or die(mysqli_error($this->connect));
        }

        $query = mysqli_query($this->connect, "SELECT * FROM $this->tableName WHERE oauth_provider = '" . $oauth_provider . "' AND oauth_uid = '" . $oauth_uid . "'") or die(mysqli_error($this->connect));
        $result = mysqli_fetch_array($query);
        return $result;
    }

    function isUserAuthenticatedForSystemUse($email)
    {

        //$sql_query="SELECT * FROM ".$this->user_table_Name." WHERE username = '".$email."' and is_active=1";
        $sql_query = "SELECT `user`.id as user,`user`.username as  username, user_group.group_id as `group` , access_control.department_id as department, role.id as role"
            . " FROM"
            . " `user`"
            . " INNER JOIN"
            . " user_group ON `user`.id = user_group.user_id"
            . " INNER JOIN"
            . " role on user.role_id=role.id"
            . " INNER JOIN"
            . " access_control ON user_group.group_id = access_control.group_id"
            . " WHERE"
            . " `user`.username = '" . $email . "';";

        $prevQuery = mysqli_query($this->connect, $sql_query) or die(mysqli_error($this->connect));


        if (mysqli_num_rows($prevQuery) > 0 && count(mysqli_num_rows($prevQuery)) >= 1) {
            $ret_array = array();
            while ($row = mysqli_fetch_row($prevQuery)) {
                if (isset($row)) {
                    $arr=array("user_id"=>$row[0],"username"=>$row[1],"group"=>$row[2],"department"=>$row[3],"role"=>$row[4]);
                    array_push($ret_array, $arr);

                }
            }
            return $ret_array;

        }
        return false;
    }
}

?>
