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
        public function getAbout1()
        {
            return $this->getSpecifyName('articles','Article','about1');
        }
        public function getAbout2()
        {
            return $this->getSpecifyName('articles','Article','about2');
        }
        public function getAbout3()
        {
            return $this->getSpecifyName('articles','Article','about3');
        }
        public function getAboutLists()
        {
            return $this->getSpecifyCategory('articles','Article',3);
        }
        public function getServices()
        {
            return $this->getSpecifyCategory('articles','Article',4);
        }
        public function getFaq()
        {
            return $this->getSpecifyCategory('articles','Article',6);
        }
        public function getPortfolio()
        {
            return $this->getSpecifyCategory('articles','Article',5);
        }
    }