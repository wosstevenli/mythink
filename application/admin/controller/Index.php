<?php
    namespace app\admin\controller;
    class index    //Index必须和Index文件名保持一致
    {
        public function index(){
            dump(config());
            return "This is admin Index index ";
        }
    }
?>
<!--卧槽勒，文件名还必须是大写开头F**K  -->