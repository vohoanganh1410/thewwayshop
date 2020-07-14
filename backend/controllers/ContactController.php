<?php

require_once 'models/Contact.php';
class ContactController
{
    public function index(){
        $contact_model = new Contact();
        $contact = $contact_model->index();

        require_once 'views/contacts/contact.php';
    }
}