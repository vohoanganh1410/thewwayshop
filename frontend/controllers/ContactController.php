<?php
require_once 'models/Contact.php';
class ContactController{
    public function lienhe(){



        $contact_model = new Contact();
        $contact = $contact_model->lienheus();

        require_once 'views/contact/contact.php';
    }

}