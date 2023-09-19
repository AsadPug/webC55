<?php
    
    class StatsDAO{
        public static function save($name, $roomType){
            $data = $name."_".$roomType."\n";
            file_put_contents("stats.txt", $data, FILE_APPEND);
        }
        public static function count(){
            $sumn = 0;
            $data = file_get_contents("stats.txt");
            for($i = 0;$i < strlen($data); $i++){
                if($data[$i] == "\n")
                    $sumn +=1;
            }
            return $sumn;
        }
        public static function countPerRoomType(){
            $result = array(0, 0, 0);
            $data = file_get_contents("stats.txt");
            for($i = 0;$i < strlen($data); $i++){
                if($data[$i] == "_"){
                    $type = $data[$i+1].$data[$i+2];
                    if($type == "Si")
                        $result[0]+=1;
                    if($type == "Do")
                        $result[1]+=1;
                    if($type == "Su")
                        $result[2]+=1;
                }
            }
            return $result;
        }
    }
    