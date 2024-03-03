<?php

namespace App\Service;

use Mailjet\Client;
use Mailjet\Resources;

class MailjetService
{
    private $apiKey="25bec8b0e8d44bbc3abd2e35d0db8ae4" ;  // Your MailJet API Key here
    private $secretKey="fa8a3592a00b0ed063f0bc27c7e0e6dc";    // Your MailJet Secret Key here
    public function sendMail( $content,$toEmail,$toName):void
    {
        $mj= new Client($this->apiKey,$this->secretKey,true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "chayma.fouzri@esprit.tn",
                        'Name' => "shayma"
                      ],
                    'To' => [
                        [
                            'Email' => $toEmail,
                            'Name' => $toName,
                        ]
                    ],
                    'TemplateID' => 5751033,
                    'TemplateLanguage' => true,
                    'Variables' => [
 
                        "content" => $content,
 
 
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());

       
    }
    
}

?>