<?php


if (! function_exists('mail')) {
    function mail(?string $mail = null, bool $link = false)
    {
        $resultMail = $mail ?? 'admin@travelterdekat.web.id';

        return $resultMail;
    }
}

if (! function_exists('phoneNumber')) {
    function phoneNumber(?string $phoneNumber = null, bool $link = false)
    {
        $resultPhoneNumber = $phoneNumber ?? '+62 882-8931-7870';

        return $link ? str_replace(['-', '+', ' '], '', $resultPhoneNumber) : $resultPhoneNumber;
    }
}

if (! function_exists('whatsapp')) {
    function whatsapp(?string $phoneNumber = null, ?string $message = null)
    {
        $phoneNumber = phoneNumber($phoneNumber, true);

        $resultMessage = $message ?? "Halo admin *_" . web()->title . "_*\n" . request()->fullUrl();
        $encodedMessage = urlencode($resultMessage);

        return "https://api.whatsapp.com/send/?phone=$phoneNumber&text=$encodedMessage&type=phone_number&app_absent=0";
    }
}


if (! function_exists('web')) {
    function web()
    {
        $data = [
            "title" => env('APP_NAME'),
            "tagline" => "Jasa Travel Jawa Bali Terbaik",
            "transparentLogo" => asset('images/logo.png'),
            "defaultLogo" => asset('images/logo.jpg'),
        ];

        return (object) $data;
    }
}

if (! function_exists('developer')) {
    function developer()
    {
        $data = [
            "name" => "Dion Zebua",
            "url" => "https://dionzebua.com"
        ];

        return (object) $data;
    }
}
