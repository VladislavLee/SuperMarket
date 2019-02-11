<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 23/12/2018
 * Time: 22:30
 */


class About{

    public  static function getAbout(){

        $db = Db::getConnection();

        $List = array();

        $result = $db->query('SELECT * FROM about ');

        $i=0;
        while ($row = $result->fetch()){
            $List[$i]['contact'] = $row['contact'];
            $List[$i]['email'] = $row['email'];
            $List[$i]['description'] = $row['description'];

            $i++;
        }

        return $List;
    }
}