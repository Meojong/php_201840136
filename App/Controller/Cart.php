<?php
namespace App\Controller;
class Cart extends Controller
{
    private $db;
    private $HttpUri;
    public function __construct($db)
    {
        $this->db = $db;
        $this->HttpUri = new \Module\Http\Uri(); // 객체생성
    }

    public function main()
    {
        if($_SESSION["email"])
        {
            echo "로그인 상태";
            $query = "SELECT * FROM cart WHERE email='".$_SESSION["email"]."'";
            $result = $this->db->queryExecute($query);

            $count = mysqli_num_rows($result);
            for ($i=0,$j=1;$i<$count;$i++,$j++) {
                $row = mysqli_fetch_object($result);
                // print_r($row);
                $query1 = "SELECT * FROM goods WHERE id='".$row->id."'";
                $result1 = $this->db->queryExecute($query1);

                $goods = mysqli_num_rows($result);
                print_r($goods);
            }    
        }
        else {
            echo "장바구니를 확인하려면 로그인을 해주세요";
        }
    }
}