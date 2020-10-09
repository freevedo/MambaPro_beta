<?php

class Portfolio
{
    private $_id;
    private $_name;
    private $_title;
    private $_content;
    private $_filter;
    private $_image;
    private $_link;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this,$method))
                $this->$method($value);
        }
    }

    // SETTERS

    public function setId($id)
        {
            $id = (int) $id;
            if($id > 0)
                $this->_id = $id;
        }
        public function setName($name)
        {
            if(is_string($name))
                $this->_name = $name;
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
        public function setFilter($filter)
        {
            if(is_string($filter))
                $this->_filter = $filter;
        }
        public function setImage($image)
        {
            if(is_string($image))
                $this->_image = $image;
        }
        public function setLink($link)
        {
            if(is_string($link))
                $this->_link = $link;
        }


        // GETTERS

        public function getId()
        {
            return $this->_id;
        } 
        public function getName()
        {
            return $this->_name;
        } 
        public function getTitle()
        {
            return $this->_title;
        } 
        public function getContent()
        {
            return $this->_content;
        } 
        public function getFilter()
        {
            return $this->_filter;
        } 
        public function getImage()
        {
            return $this->_image;
        } 
        public function getLink()
        {
            return $this->_link;
        } 
}