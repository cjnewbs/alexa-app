<?php

namespace App;

use Newbury\AlexaFramework\Intent\BaseIntent;

class Example extends BaseIntent
{
    public function execute()
    {
        $response = 'This is an example intent';
        $this->response->setCard(
            'Example Intent', $response)
            ->setOutputSpeech($response)
            ->setShouldEndSession(true)
            ->sendResponse();
    }
}