<?php

namespace App\Models;

use PDO;
use App\Models\Users;
use App\Models\Admin;
use Config\DataBase;

class User extends Users
{

    public function getUserPorfile()
    {
        $pdo = DataBase::getConnection();
        $sql = "SELECT `userinfo`.`city`, `userinfo`.`street`, `userinfo`.`postal`, `userinfo`.`phoneNumber`,`userinfo`.`img_path`, `user`.`mail`
                FROM `userinfo`
                INNER JOIN `user` ON `userinfo`.`id` = `user`.`id`
                WHERE `userinfo`.`id` = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$this->id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new User(null, $row['mail'], null, null, $row['city'], $row['postal'], $row['street'], null, null, $row['phoneNumber'], $row['img_path'], null, null);
        } else {
            return null;
        }
    }

    public function updateUser()
    {
        $pdo = DataBase::getConnection();
        $sql = "UPDATE `user` 
        SET `mail` = ?
        WHERE `user`.`id` = ?";
        $statement = $pdo->prepare($sql);
        return $statement->execute([$this->mail, $this->id]);
    }

    public function updateUserInfo()
    {
        $pdo = DataBase::getConnection();
        $sql = "UPDATE `userinfo` 
        SET `city` = ?, `postal` = ?, `street` = ?, `phoneNumber` = ?,  `img_path` = ?
        WHERE `userinfo`.`id` = ?";
        $statement = $pdo->prepare($sql);
        return $statement->execute([$this->city, $this->postal, $this->street, $this->phone_number, $this->img_path, $this->id]);
    }
}
