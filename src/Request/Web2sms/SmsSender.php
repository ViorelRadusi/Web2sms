<?php namespace Request\Web2sms;

use App, Config, Response, SoapClient, SoapFault;

class SmsSender{

  private $web2sms, $recipient, $message, $sender, $scheduleDate, $validity, $callbackUrl;

  public function __construct(){
    $this->web2sms     = new SoapClient("https://www.web2sms.ro/wsi/service.php?wsdl");
    $this->username    = Config::get("web2sms::username");
    $this->apiKey      = Config::get("web2sms::apiKey");

    $this->recipient   = Config::get("web2sms::recipient");
    $this->message     = Config::get("web2sms::message");

    $this->sender      = Config::get("web2sms::sender");
    $this->validity    = Config::get("web2sms::validity");
    $this->callbackUrl = Config::get("web2sms::callbackUrl");

    $this->somethingWethTerrablyWrong();
  }

  public function recipient($recipient){
    $this->recipient = $recipient;
    return $this;
  }

  public function message($message){
    $this->message = $message;
    return $this;
  }

  public function sender($sender){
    $this->sender = $sender;
    return $this;
  }

  public function validity($validity){
    $this->validity = $validity;
    return $this;
  }

  public function callbackUrl($callbackUrl){
    $this->callbackUrl = $callbackUrl;
    return $this;
  }

  public function send(){
    return  $this->web2sms->sendSmsAuthKey(
      $this->username , $this->apiKey,
      $this->sender   , $this->recipient,
      $this->message  , $this->scheduleDate,
      $this->validity , $this->callbackUrl
    );
  }

  private function  somethingWethTerrablyWrong(){
    App::error(function(SoapFault $e) {
        return Response::json("There was an error while trying to schedule an SMS!\n Message: " . $e->getMessage() , 404 );
    });
  }
}
