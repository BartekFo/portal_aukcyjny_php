<?php
class kontoView extends view
{
    public function __construct( $param='' )
    {
        $model = $this->loadModel('konto');
        $auth = $this->loadModel('signup');
        $this->set('Error', "");
        if($this->isLogged($auth))
        {
            if(isset($_POST['submitUserData'])){
                if(!$model->updateUserData()) {
                    $this->set('Error', 'Błąd systemu. Spróbuj ponownie później');
                }
            }
            $userArr = $model->getUser();
            $nameAndSurname = $userArr['name_surname'];
            $email = $userArr['email'];
            $phoneNumber = $userArr['number'];
            $street = $userArr['street'];
            $zipCode = $userArr['zip_code'];
            $city = $userArr['city'];
            $this->set('nameAndSurname', $nameAndSurname);
            $this->set('email', $email);
            $this->set('number', $phoneNumber);
            $this->set('street', $street);
            $this->set('zipCode', $zipCode);
            $this->set('city', $city);
            $this->render("myAcc");
        } else {
            $this->redirect('logowanie');
        }

    }
}