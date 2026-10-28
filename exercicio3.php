<?php

class Notificacao{
    protected string $mensagem;

    public function __construct($mensagem){
        $this->mensagem = $mensagem;
    }

    public function enviar(){
        echo'enviando mensagem ...';
    }
}

class NotificacaoEmail extends Notificacao{
    public function __construct($mensagem){
        parent::__construct($mensagem);
    }

    public function enviar(){
        echo "Modo de mensagem: Email <br>" . $this->mensagem;
    }
}

class NotificacaoSMS extends Notificacao{
    public function __construct($mensagem){
        parent::__construct($mensagem);
    }

    public function enviar(){
        echo "Modo de mensagem: SMS <br>" . $this->mensagem;
    }
}

class NotificacaoPush extends Notificacao{
    public function __construct($mensagem){
        parent::__construct($mensagem);
    }

    public function enviar(){
        echo "Modo de mensagem: Notificação push <br>" . $this->mensagem;
    }
}

$msg1 = new NotificacaoEmail('Tung Tung Tung Sahur');
$msg1->enviar();
echo '<br>';
$msg2 = new NotificacaoSMS('Bombardilo Crocodilo');
$msg2->enviar();
echo '<br>';
$msg3= new NotificacaoPush('Tralalero Tralala');
$msg3->enviar();


?>