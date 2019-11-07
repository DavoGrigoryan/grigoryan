<?php

//    class classNew{
//        public function plus($inp1,$inp2){
//            return intval($inp1*1)+intval($inp2);
//        }
//        public function minus($inp1,$inp2){
//            return intval($inp1)-intval($inp2);
//        }
//
//
//    }
//
//    $obj=new classNew;
//    echo $obj->plus('hh',4);
//    echo '<br>';
//    echo $obj->minus(5,'kkk');

//class classNew{
//
//    public $a=3;
//    public $b=4;
//    public $c=5;
//
//
//    private function getplus(){
//        if(($this->a*$this->a)+($this->b*$this->b)==($this->c*$this->c)){
//            return true;
//        }
//        else if(($this->a*$this->a)+($this->c*$this->c)==($this->b*$this->b)){
//            return true;
//        }
//        else if(($this->b*$this->b)+($this->c*$this->c)==($this->a*$this->a)){
//            return true;
//        }
//        else{
//            return false;
//        }
//    }
//    public function setplus(){
//        return $this->getplus();
//    }
//    }
//
//$obj=new classNew;
//echo $obj->setplus();

//'Գրել ծրագիր, որը հաշվում է $a = array(12,2,95,10,5) ներմուծված միաչափ զանգվածի
//փոքրագույն տարրը: '

//class Test{
//    public $arr;
//    public  $i;
//    public  $res;
//
//    public $a=array(12,7,1,3,95,10,5);
//    private function getA(){
//        $arr= $this->a;
//        $res=$arr[0];
//         for($i=0;$i<count($arr);$i++){
//             if($arr[$i]<$res){
//                 $res=$arr[$i];
//             }
//         }
//         return $res;
//    }
//
//    public function setA(){
//        return $this->getA();
//    }
//}
//$obj=new Test;
//echo $obj->setA();
//?>

<?php

    class Test{
        public $arr=array(4,2,9,12,2,1);
        public $res;
        public $temp;
        public $i;
        public $j;
        private function getArr(){
            $a=$this->arr;
            for($i=0;$i<count($a);$i++){
                for($j=0;$j<count($a);$j++){
                    if($a[$i]==$a[$j]){
                        $temp=$a[$i];
                    }
                    else{
                        $temp ='false';
                    }
                }
                return $temp;
            }
        }
        public function setArr(){
            return $this->getArr();
        }
    }
    $obj=new Test;
    echo $obj->setArr();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
<!--        <form>-->
<!--            <input type="number" name="inp1">-->
<!--            <input type="number" name="inp2">-->
<!--            <input type="submit" value="+">-->
<!--        </form>-->
        <script  src="script/jquery.js"></script>
        <script  src="script/script.js"></script>
    </body>
</html>