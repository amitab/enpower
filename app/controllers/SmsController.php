<?php


class SmsController extends BaseController {
    
    public function submit() {
    
        $numbersText = Input::get('numbers');
        $numbers = preg_split("/\s+/u", $numbersText);
        
        foreach($numbers as $number) {
        
            $number = '+91' . $number;
            Twilio::message($number, 'You have been invited to a meetup at ' . Input::get('place') . ' on ' . Input::get('start_date') . ' at ' . Input::get('start_time') . '.');
        
        }
        
        return Redirect::to('dashboard');
    
    }

}