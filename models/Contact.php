<?php 

    class Contact
    {
        private $_id;
        private $_email;
        private $_adress;
        private $_phone;
        private $_link1;
        private $_link2;

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
        public function setEmail($email)
        {
            if(is_string($email))
                $this->_email = $email;
        }
        public function setAdress($adress)
        {
            if(is_string($adress))
                $this->_adress = $adress;
        }
        public function setPhone($phone)
        {
            $phone = (int) $phone;
            if($phone > 0)
                $this->_phone = $phone;
        }
        public function setLink1($link1)
        {
            if(is_string($link1))
                $this->_link1 = $link1;
        }
        public function setLink2($link2)
        {
            if(is_string($link2))
                $this->_link2 = $link2;
        }
        // GETTERS

        public function getId()
        {
            return $this->_id;
        } 
        public function getEmail()
        {
            return $this->_email;
        } 
        public function getAdress()
        {
            return $this->_adress;
        }
        public function getPhone()
        {
            return $this->_phone;
        }
        public function getLink1()
        {
            return $this->_link1;
        }
        public function getLink2()
        {
            return $this->_link2;
        }

    }