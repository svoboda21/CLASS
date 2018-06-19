<?php
    class Car
    {
        public $color;
        public $name;
        public $transmission='Механика';
        public $engine;
        public function getTransmission($transmission)
        {
            return $this->transmission=$transmission;
        }
    }
    $bmw= new Car();
    $bmw->name='БМВ';
    $bmw->color='белый';
    $bmw->engine='2.0';
    $bmw->getTransmission('Автомат');
    echo "<pre>";
    print_r($bmw);
    $priora= new Car();
    $priora->name='Лада';
    $priora->color='красный';
    $priora->engine='1.6';
    $priora->transmission;
    print_r($priora);

    class Product
    {
        private $privatecolor='Розовый';
        public function __construct($name, $price, $size)
        {
            $this->name = $name;
            $this->price = $price;
            $this->size = $size;
        }
    }
    $tele= new Product('Телефон',10000,'Маленький');
    print_r($tele);
    $tv= new Product('ТВ',300000,'Большой');
    print_r($tv);

    class Pen
    {
        private $size=20;
        public static $material='Пластик';
        public function getMaterial($a)
        {
            self::$material=$a;
            echo self::$material;
            echo "<br>";
        }
        public function __construct($brand,$price,$color)
        {
            $this->brand_=$brand;
            $this->price=$price;
            $this->color=$color;
        }
    }
    $blackpen= new Pen('ErichKrause',20,'Черный');
    print_r($blackpen);
    $blackpen->getMaterial('Металл');
    $greykpen= new Pen('noname',10,'Серый');
    print_r($greykpen);
    echo pen::$material;

    class Tv
    {
        private $weight=40;
        public function __construct($name,$diagonal,$price,$color)
        {
            $this->name=$name;
            $this->diagonal=$diagonal;
            $this->price=$price;
            $this->color=$color;
        }
    }
    $sonytv= new Tv('Sony',55,150000,'black');
    echo "<br>";
    print_r($sonytv);
    $panasonictv= new Tv('Panasonic',50,100000,'black');
    echo "<br>";
    print_r($panasonictv);
    class Duck
    {
        private $color='Белый';
        private $fly='Не летает';
        public function __construct($name,$age,$rich)
        {
            $this->name=$name;
            $this->age=$age;
            $this->rich=$rich;
        }
    }
    $donaldduck= new Duck('Donald',20,'NO');
    echo "<br>";
    print_r($donaldduck);
    $scroogeduck= new Duck('Scrooge',65,'YES');
    echo "<br>";
    print_r($scroogeduck);