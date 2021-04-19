<?php

class Email
{

    private $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer;
        $this->mailer->isSMTP();
        $this->mailer->Host = HOST_SMTP;
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = EMAIL_SMTP;
        $this->mailer->Password = SENHA_SMTP;
        $this->mailer->SMTPSecure = 'tls/ssl';
        $this->mailer->Port = 587;

        $this->mailer->setFrom(EMAIL_SMTP, 'Mailer');
        $this->mailer->addAddress(EMAIL_SMTP, 'Pedro');

        $this->mailer->isHTML(true);
        $this->mailer->CharSet = 'UTF-8';
        $this->mailer->Subject = 'Assunto do e-mail';
        $this->mailer->Body = "Corpo do meu e-mail";
        $this->mailer->AltBody = "Segundo corpo do meu e-mail";

        if (!$this->mailer->send()){
            echo "Erro";
        }else{
            echo "Sucesso!";
        }
    }
}
