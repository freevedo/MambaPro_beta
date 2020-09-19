<?php

    class ImageManager extends Model
    {
        public function getImages()
        {
            return $this->getAll('images','Image');
        }
        public function getSlide1()
        {
            return $this->getSpecifyName('images','Image','slide1');
        }
        public function getSlide2()
        {
            return $this->getSpecifyName('images','Image','slide2');
        }
        public function getSlide3()
        {
            return $this->getSpecifyName('images','Image','slide3');
        }
    }