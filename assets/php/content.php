<?php

//include 'db-config.php';
/**
 * Content
 */
class Content
{

  protected $_fields = array(
        'id' => 'id',
        'html' => '',
        'timestamp' => '',
        'user_id' => '',
        'page_id' => '',
        'name' => '',
        'special' => '',
        'active' => ''
    );

  public $id;
  public $html;
  public $timestamp;
  public $user_id;
  public $page_id;
  public $name;
  public $special;
  public $active;

  function __construct()
  {
    $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if (!$mysql) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
          // echo "Connected successfully \n";
        }
    $sql2 = "CREATE TABLE IF NOT EXISTS `content` (
                    `id` int(11) NOT NULL,
                    `html` text NOT NULL,
                    `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    `user_id` int(11) NOT NULL,
                    `page_id` int(11) NOT NULL,
                    `name` varchar(64) NOT NULL,
                    `special` int(11) NOT NULL,
                    `active` int(11) NOT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

    $res2 = mysqli_query($mysql, $sql2);
    $mysql->close();

  }

  public function form() {
          echo '<form action="assets/php/post.php" method="post">
                <input type="hidden" name="newcontent" value=1>
                Name: <input type="text" name="name" class="form-control"><br>
                Page ID: <input type="text" name="page_id" class="form-control"><br>
                HTML: <textarea type="text" name="html" class=" richedit"></textarea><br>
                <input type="submit" value="Submit">
                </form>';
  }

  public static function addContent($name, $page_id, $html) {
      $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
      if (!$mysql) {
          die("Connection failed: " . mysqli_connect_error());
      } else {
        // echo "Connected successfully \n";
      }

      $sql = "INSERT INTO `content`(`html`, `timestamp`, `user_id`, `page_id`, `name`) VALUES ('$html', 0, 0, '$page_id', '$name')";
      $res = mysqli_query($mysql, $sql);
      //var_dump($res);
      $mysql->close();
      return $res;
    }

    public static function getContent($page_id) {
          $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
          if (!$mysql) {
              die("Connection failed: " . mysqli_connect_error());
          } else {
            // echo "Connected successfully \n";
          }

          $sql = "SELECT `html` FROM `content` WHERE page_id=$page_id AND special=0 AND active=1";
          $res = mysqli_query($mysql, $sql);
          $mysql->close();
          while($row = $res->fetch_assoc()) {
              echo $row["html"];
              echo "\n";
          }
      }

    public static function editContent($page_id) {
      $html = self::getContent($page_id);
    }

    public static function getContentByName($name) {
      $mysql = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
      if (!$mysql) {
          die("Connection failed: " . mysqli_connect_error());
      } else {
        // echo "Connected successfully \n";
      }

      $sql = "SELECT `html` FROM `content` WHERE name='$name'";
      $res = mysqli_query($mysql, $sql);
      $mysql->close();
      while($row = $res->fetch_assoc()) {
          echo $row["html"];
          echo "\n";
      }
    }
}
 ?>
