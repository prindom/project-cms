<?php
include "db-config.php";

class CMS {
    public static $scripts = array(
    '<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>',
    '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>',
    '<script src="/project-cms/assets/js/code.js"></script>');

    public static $stylesheets = array(
      '  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">',
      '<link rel="stylesheet" href="/project-cms/assets/css/style.css" />'
    );

    public function __construct($id = null) {
        $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if (!$mysql) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
          // echo "Connected successfully \n";
        }

        $sql1 = "CREATE TABLE IF NOT EXISTS `users` (
                    `id` int(11) NOT NULL,
                    `username` varchar(64) NOT NULL,
                    `password` varchar(255) NOT NULL,
                    `email` varchar(255) NOT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

        $sql2 = "CREATE TABLE IF NOT EXISTS `content` (
                    `id` int(11) NOT NULL,
                    `html` text NOT NULL,
                    `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    `user_id` int(11) NOT NULL,
                    `page_id` int(11) NOT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

        $res1 = mysqli_query($mysql, $sql1);
        $res2 = mysqli_query($mysql, $sql2);
        $mysql->close();
    }

    public static function getScripts() {
      foreach (self::$scripts as $key => $value) {
        echo $value;
        echo "\n";
      }
    }
    public static function getStylesheets() {
      foreach (self::$stylesheets as $key => $value) {
        echo $value;
        echo "\n";
      }
    }
    public static function getContent($page_id) {
        $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if (!$mysql) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
          // echo "Connected successfully \n";
        }

        $sql = "SELECT `html` FROM `content` WHERE page_id=$page_id AND special=0";
        $res = mysqli_query($mysql, $sql);
        $mysql->close();
        while($row = $res->fetch_assoc()) {
            echo $row["html"];
            echo "\n";
        }
    }

    public static function getHeader() {
        $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if (!$mysql) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
          // echo "Connected successfully \n";
        }

        $sql = "SELECT `html` FROM `content` WHERE name='header' AND special=1";
        $res = mysqli_query($mysql, $sql);
        $mysql->close();
        while($row = $res->fetch_assoc()) {
            echo $row["html"];
            echo "\n";
        }
    }
    public static function getFooter() {
        $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if (!$mysql) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
          // echo "Connected successfully \n";
        }

        $sql = "SELECT `html` FROM `content` WHERE name='footer' AND special=1";
        $res = mysqli_query($mysql, $sql);
        $mysql->close();
        while($row = $res->fetch_assoc()) {
            echo $row["html"];
            echo "\n";
        }
    }

    public static function addContent($content, $page_id) {
      $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
      if (!$mysql) {
          die("Connection failed: " . mysqli_connect_error());
      } else {
        // echo "Connected successfully \n";
      }

      $sql = "INSERT INTO `content`(`html`, `timestamp`, `user_id`, `page_id`) VALUES ('<p>Content</p>', 0, 0, $page_id)";
      $res = mysqli_query($mysql, $sql);
      var_dump($res);
      $mysql->close();
    }
}
?>
