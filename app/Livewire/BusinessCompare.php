<?php

namespace App\Livewire;

use App\Models\Business;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class BusinessCompare extends Component
{
    public $businessOne;
    public $businessTwo;

    public $sectionOne;

    public function mount($idOne, $idTwo)
    {
        $this->businessOne = Business::find($idOne);
        $this->businessTwo = Business::find($idTwo);

        //$this->sectionOne = $this->generateContent();
        $this->sectionOne = "testing";

    }

    private function generateContent()
    {

        $data = [
            "businessOneName" => $this->businessOne->name,
            "businessOneDesc" => $this->businessOne->description,
            "businessTwoName" => $this->businessTwo->name,
            "businessTwoDesc" => $this->businessTwo->description
        ];


        $item = json_decode($this->claudeRequest(json_decode(json_encode($data))), true);
        return $item['content'][0]['text'];

    }

    private function geminiRequest($data)
    {

        $api_key = env('GEMINI_API_KEY');

        $curl = curl_init();


        $text = "
    With the descriptions I am about to provide I would like you to
    write me a breakdown and comparisons of the businesses. Utilize TailwindCSS and DaisyUI
    to write out a typical format for this page So that means everything must be written in
    HTML format, in a light mode style

    Description 1 for business {$data->businessOneName}:

    {$data->businessOneDesc}

    Description 2 for business {$data->businessTwoName}:

    {$data->businessTwoDesc}
";

        $postFields = [
            "contents" => [
                "parts" => [
                    "text" => $text,
                ],
            ],
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=AIzaSyClS3-mSTmhz1qqu6PRQaLhSnNsgdcDqPI",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($postFields), // convert array to json
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }


    }

    public function render()
    {
        return view('livewire.business-compare')->layout('layouts.guest');
    }

    private function claudeRequest($data)
    {

        $api_key = env('CLAUDE_API_KEY');

        $text = "
    With the descriptions I am about to provide I would like you to
    write me a breakdown and comparisons of the businesses. I would like
    you to break this down in a simple HTML format, I would like you to
    give no headers or titles. Only these sections

    A quick 250 word brief explanation of both businesses. Then a break line ( <br/> )

    Then I would like you to write 3 bullet points on the differences of these businesses
    highlighting which areas are important.

    Another break line after this.

    then a closing 250 word explanation on which is preferred and why.

    Description 1 for business {$data->businessOneName}:

    {$data->businessOneDesc}

    Description 2 for business {$data->businessTwoName}:

    {$data->businessTwoDesc}
";

        $data_string = json_encode([
            "model" => "claude-3-sonnet-20240229",
            "max_tokens" => 1024,
            "messages" => [
                [
                    "role" => "user",
                    "content" => $text
                ]
            ]
        ]);

        $ch = curl_init('https://api.anthropic.com/v1/messages');

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'x-api-key: ' . $api_key,
            'anthropic-version: 2023-06-01',
            'content-type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return $response;

    }
}
