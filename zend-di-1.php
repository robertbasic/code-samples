<?php

/**
; di.ini config
di.instance.alias.contact = "Contact"
di.instance.alias.zendmail = "Zend\Mail\Mail"

di.instance.contact.parameters.mailer = zendmail
di.instance.zendmail.parameters.charset = "utf-8"
*/

class Contact {
    protected $mail;
    public function __construct(Zend\Mail\Mail $mail) {
        $this->mail = $mail;
    }
}