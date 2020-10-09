<?php
    
    class Student
    {
       public $_name;
       public $_firstname;
       public $_email;
       public $_image;
       public $_phone;
       public $_notes;
       public $_diplom;
       public $_message;
        
        public $_nameError;
        public $_firstnameError;
        public $_emailError;
        public $_imageError;
        public $_phoneError;
        public $_notesError;
        public $_diplomError;
        public $_messageError;
        
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
        public function setName($name)
        {
            if(is_string($name))
                $this->_name = $name;
        }
        public function setNameError($nameError)
        {
            if(is_string($nameError))
                $this->_nameError = $nameError;
        }
        public function setEmail($email)
        {
            if(is_string($email))
                $this->_email = $email;
        }
        public function setFirstname($firstname)
        {
            if(is_string($firstname))
                $this->_firstname = $firstname;
        }
        public function setPhone($phone)
        {
            $phone = (int) $phone;
            if($phone > 0)
                $this->_phone = $phone;
        }
        public function setNotes($notes)
        {
            if(is_string($notes))
                $this->_notes = $notes;
        }
        public function setImage($image)
        {
            if(is_string($image))
                $this->_image = $image;
        }
        public function setDiplom($diplom)
        {
            if(is_string($diplom))
                $this->_diplom = $diplom;
        }
        public function setMessage($message)
        {
            if(is_string($message))
                $this->_message = $message;
        }


        //GETTERS

        public function getName()
        {
            return $this->_name;
        } 
        public function getFirstname()
        {
            return $this->_firstname;
        } 
        public function getEmail()
        {
            return $this->_email;
        } 
        public function getImage()
        {
            return $this->_image;
        } 
        public function getPhone()
        {
            return $this->_phone;
        } 
        public function getNotes()
        {
            return $this->_notes;
        } 
        public function getDiplom()
        {
            return $this->_diplom;
        }
        public function getMessage()
        {
            return $this->_message  ;
        } 
    }

?>