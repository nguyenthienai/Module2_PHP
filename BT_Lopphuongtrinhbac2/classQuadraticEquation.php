<?php
    class QuadraticEquation
    {
        private $a;
        private $b;
        private $c;

        public function __Construct($_a,$_b,$_c)
        {
            $this->a = $_a;
            $this->b = $_b;
            $this->c = $_c;
        }

        public function getNumA()
        {
            return $this->a;
        }

        public function getNumB()
        {
            return $this->b;
        }

        public function getNumC()
        {
            return $this->c;
        }

        public function getDelta()
        {
            return pow($this->b,2) - (4 * $this->a * $this->c);
        }

        public function getRoot1()
        {    
            return (-$this->b + sqrt($this->getDelta())) / (2 * $this->a);
        }

        public function getRoot2()
        {    
            return (-$this->b - sqrt($this->getDelta())) / (2 * $this->a);
        }
    }

?>