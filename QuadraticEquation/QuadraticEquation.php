<?php


class QuadraticEquation{
    private $a;
    private $b;
    private $c;
    public $delta;
    public function __construct($a,$b,$c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function getDiscriminant(){
        $this->delta=$this->b**2-4*$this->a*$this->c;
    }
    public function getRoot(){
        $root=null;
        if ($this->a==0){
            if ($this->b==0){
                if ($this->c==0){
                    $root='phuong trinh co  vo so nghiem';
                }else {
                    $root='phuong trinh vo nghiem';
                }
            }else{
                $x=-$this->c/$this->b;
                $root='phuong trinh co 1 nghiem la: '.$x;
            }
        }else{
            $sqrtDelta=pow($this->delta,0.5);
            if ($this->delta<0){
                $root='phuong trinh vo nghiem';
            }
            if ($this->delta==0){
                $x=-$this->b/(2*$this->a);
                $root='phuong trinh co 1 nghiem la: '.$x;
            }
            if ($this->delta>0){
                $x1=(-$this->b-$sqrtDelta);
                $x2=(-$this->b+$sqrtDelta);
                $root='phuong trinh co 2 nghiem la: '.$x1." va ".$x2;
            }
        }
        return $root;
    }
}