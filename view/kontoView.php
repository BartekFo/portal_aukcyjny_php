<?php
class kontoView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('konto');
        $auth = $this->loadModel('signup');
        if($this->isLogged($auth))
        {
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