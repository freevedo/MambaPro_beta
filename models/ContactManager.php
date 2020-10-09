<?php

    class ContactManager extends Model
    {
        public function getContact1()
        {
            return $this->getSpecifyId('contact','Contact',1);
        }
    }
    //06151 133222