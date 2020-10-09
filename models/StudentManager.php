<?php


        class StudentManager extends Model
        {
            public function getForm()
            {
                $name = $nameError = $firstname = $firstnameError = $email = $emailError = $phone = 
                $phoneError = $image = $imageError = $notes = $notesError = $diplom = $diplomError =
                $content = $contentError = $msg = ""; 
                
                if ($_SERVER["REQUEST_METHOD"]== $_POST)
                {
                    $name       = verifyInput($_POST["name"]);
                    $firstname  = verifyInput($_POST["firstname"]);
                    $isSuccess = true;
                    $student = $this->set;
                    if (empty($name))
                    {
                        $nameError = "champ vide";
                    }
                    else
                    {
                        $student->setName($name);
                    }
                    if(empty($firstname))
                    {
                        echo "test reussi";
                    }
                }
            }
        }
  