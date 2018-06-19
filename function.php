<?php
    class News
    {
        public function getData()
        {
            $json=file_get_contents(__DIR__.'/new.json');
            $data=json_decode($json,true);
            echo $this->data=$data['data'];
        }
        public function getTitle()
        {
            $json=file_get_contents(__DIR__.'/new.json');
            $data=json_decode($json,true);
            echo $this->title=$data['title'];
        }
        public function getPicture()
        {
            $json=file_get_contents(__DIR__.'/new.json');
            $data=json_decode($json,true);
            echo $this->picture=$data['picture'];

         }
        public function getText()
        {
            $json=file_get_contents(__DIR__.'/new.json');
            $data=json_decode($json,true);
            echo "<pre>";
            echo $this->text=$data['text'];
        }
        public function getComments()
        {
            $stringname=[];
            $stringcomments=[];
            $comments = file_get_contents("textcomment.txt");
            $name = file_get_contents("name.txt");
            $resultname = substr($name, 0, -1);
            $stringname = explode("|", $resultname);
            $resulcomments = substr($comments, 0, -1);
            $stringcomments = explode("|", $resulcomments);
            $final = array_combine($stringname,$stringcomments);
            foreach ($final as $item=>$value) {
                echo "<b>".$this->name =$item."</b>" ;
                echo "<br>";
                echo $this->comments = $value;
                echo "<br>";
                echo "<br>";
            }
        }
    }
