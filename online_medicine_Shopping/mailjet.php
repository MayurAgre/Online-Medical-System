<?php
	session_start();
	
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('b0323994480610d55614e8f0b15e5e2f','59b72fe95995427ddd207b7578eaacbf',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "dhagebhakti0123@gmail.com",
          'Name' => "Medicine Guide"
        ],
        'To' => [
          [
            'Email' => $_SESSION['em'],
            'Name' => $_SESSION['un'],
          ]
        ],
        'Subject' => "Confirmation mail from e-pharmacy",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear ".$_SESSION['un'].", welcome to our E-pharmacy website",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
  echo"<script>window.location='ragister.php';</script>";
 
?>
