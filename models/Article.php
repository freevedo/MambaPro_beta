<?php 

   /** */    
    /**
     * Article
     */
    class Article 
    {        
        /**
         * _id
         * _tit
         * @var mixed
         */
        private $_id;
        private $_title;
        private $_content;
        private $_name;
        /**
         * __construct
         *
         * @param  mixed $data
         * @return void
         */
        public function __construct(array $data)
        {
            $this->hydrate($data);
        }
        
        /**
         * hydrate
         *
         * @param  mixed $data
         * @return void
         */
        public function hydrate(array $data)
        {
            foreach($data as $key => $value)
            {
                $method = 'set'.ucfirst($key);

                if(method_exists($this,$method))
                    $this->$method($value);
            }
        }

        //SETTERS
        
        /**
         * setId
         *
         * @param  mixed $id
         * @return void
         */
        public function setId($id)
        {
            $id = (int) $id;
            if($id > 0)
                $this->_id = $id;
        }
        public function setTitle($title)
        {
            if(is_string($title))
                $this->_title = $title;
        }
        public function setContent($content)
        {
            if(is_string($content))
                $this->_content = $content;
        }
        public function setName($name)
        {
            if(is_string($name))
                $this->_name = $name;
        }

        //GETTERS
        
        /**
         * getId
         *
         * @return void
         */
        public function getId()
        {
            return $this->_id;
        }        
        /**
         * getTitle
         *
         * @return void
         */
        public function getTitle()
        {
            return $this->_title;
        }        
        /**
         * getContent
         *
         * @return void
         */
        public function getContent()
        {
            return $this->_content;
        }
        public function getName()
        {
            return $this->_name;
        }
    }