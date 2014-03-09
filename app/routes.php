<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*Route::get('{courseId}', 'EnrollController@index')->where('courseId', '[0-9]+');


Route::get('create_user', function() {

    try
{
    // Create the user
    $user = Sentry::createUser(array(
        'email'     => 'john.doe@example.com',
        'password'  => 'test',
        'activated' => true,
    ));

    // Find the group using the group id
    $adminGroup = Sentry::findGroupById(1);

    // Assign the group to the user
    $user->addGroup($adminGroup);
}
catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
{
    echo 'Login field is required.';
}
catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
{
    echo 'Password field is required.';
}
catch (Cartalyst\Sentry\Users\UserExistsException $e)
{
    echo 'User with this login already exists.';
}
catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
{
    echo 'Group was not found.';
}
    
});


Route::get('create_course', function() {

    $course = new Course;
    $course->course_name = 'Test Course';
    $course->starts_on = date("Y-m-d", strtotime('2014-03-01'));
    $course->ends_on = date("Y-m-d", strtotime('2014-08-01'));
    $course->duration = 127;
    $course->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quia, molestiae, quaerat, qui veritatis facilis architecto distinctio ratione illum nemo quibusdam error nisi enim libero earum aliquam eos vel ab!';
    $course->intro_video_url = "http://www.youtube.com/watch?sdfjdsjfUHN1";
    $course->pincode = 238283893;
    $course->creator = 'john.doe@example.com';
    $course->save();
    
});

*/
Route::get('test', function() {

    Twilio::message('+919663812519', 'Pink Elephants and Happy Rainbows');
    
});

Route::get('course', function() {

    return View::make('coursedetails');

});



Route::post('send/sms', 'SmsController@submit');

Route::get('login', 'LoginController@index');

Route::post('login/verify', 'LoginController@login');

Route::get('register', 'RegisterController@index');

Route::post('register/do', 'RegisterController@registerUser');



Route::get('dashboard', 'DashboardController@index');