<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'example',

    'accessToken' => 'EAAP4tgvAakcBAHcBXOEzMgZCAzyQqVm7KG1i59wyDZCIVXggyZA2vYIb5tPR1cJZBdzufYZBXquEQfl8ZBZCdSto0rJ9hTBJlM8aBsZBsXFttlo3uefX7qtWxgZCJSYrJy3JzXmDwZB7Pqj6WkLhInPwWIEpZAeeitu067kof8q4ZB6qQgZDZD'

  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
