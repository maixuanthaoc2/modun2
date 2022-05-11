<?php
    class ArrayList {
        private $arrayList = [];
        function __construct(){
​
        }
​
        //them phan tu vao danh sach
        function add($item){
            array_push($this->arrayList,$item);
        }
​
        //them phan tu tai mot vi tri
        function addAtPos($item,$index){
            /*
            array_splice(array,offset,lenght,replacement);
            array   : mảng truyền vào
            offset  : từ chỉ số nào
            lenght  : xóa bao nhieu 
            replacement: thay thế cái gì
            */
            array_splice($this->arrayList,$index,0,$item);
        }
​
        //xoa phan tu theo chi so
        function removeByIndex($index){
            /*
            array_splice(array,offset,lenght,replacement);
            array   : mảng truyền vào
            offset  : từ chỉ số nào ( từ chỉ số index )
            lenght  : xóa bao nhieu  ( hiện tại xóa 1 phần tử )
            replacement: thay thế cái gì ( hiện tại ko thay thế )
            */
            array_splice($this->arrayList,$index,1);
        }
​
        //tim kiem phan tu
        function contains($item){
            return array_search($item, $this->arrayList);
        }
​
        //tim kiem phan tu dua vao chi so
        function get($index){
            return $this->arrayList[$index];
        }
​
        //tra ve mang
        function toArray(){
            return $this->arrayList;
        }
​
        //tra ve do dai cua mang
        function size(){
            return count($this->arrayList);
        }
​
        //kiem tra mang có rỗng ko
        function isEmpty(){
            if( $this->count() == 0 ){
                return true;
            }
            return false;
        }
​
        //di chuyển item lên
        function shiftItemUp($startIndex,$endIndex){
​
        }
​
        //di chuyển item xuống
        function shiftItemDown($startIndex,$endIndex){
            
        }
    }
​
    $objArrayList = new ArrayList();
    $objArrayList->add('Luy');
    $objArrayList->add('Cuong');
    $objArrayList->add('Duong');
    $objArrayList->add('Hai');
    $objArrayList->add('Thao');
    $objArrayList->add('Ngoc Anh');
    $objArrayList->add('Viet');
    $objArrayList->add('Linh');
    $objArrayList->add('Chơn');
    echo '<pre>';
    print_r($objArrayList);
    $objArrayList->removeByIndex(5);
    print_r($objArrayList);
    $objArrayList->addAtPos('Ngọc Hoàng',5);
    print_r($objArrayList);