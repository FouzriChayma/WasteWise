<?php

namespace App\Service;

use Mailjet\Client;
use Mailjet\Resources;

class MailjetService
{
    private $apiKey="25bec8b0e8d44bbc3abd2e35d0db8ae4" ;  // Your MailJet API Key here
    private $secretKey="429df89848d8382b213e94fb80ce4727";    // Your MailJet Secret Key here
    public function sendMail( $content,$toEmail,$toName):void
    {
        $mj= new Client($this->apiKey,$this->secretKey,true,['version' => 'v3.1']);
        $body = [
            'Messages' => [ 
                [
                    'From' => [
                        'Email' => "chayma.fouzri@esprit.tn",
                        'Name' => "chayma"
                      ],
                    'To' => [
                        [
                            'Email' => $toEmail,
                            'Name' => $toName,
                        ]
                    ],
                    'TemplateID' => 5767495,
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