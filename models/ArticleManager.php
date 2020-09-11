<?php 

    class ArticleManager extends Model
    {
        public function getArticles()
        {
            return $this->getAll('articles','Article');
        }
        public function getHero1()
        {
            return $this->getSpecifyName('articles','Article','hero1');
        }
        public function getHero2()
        {
            return $this->getSpecifyName('articles','Article','hero2');
        }
        public function getHero3()
        {
            return $this->getSpecifyName('articles','Article','hero3');
        }
    }