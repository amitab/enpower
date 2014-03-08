<?php


class RegisterController extends BaseController {

    public function index() {
        // make user view
    }
    
    public function registerUser() {
        
        $userDetails = new UserDetails;
        $userDetails->first_name = Input::get('first_name');
        $userDetails->last_name = Input::get('last_name');
        $userDetails->dob = new DateTime(Input::get('dob'));
        $userDetails->uid = Input::get('uid');
        
        if(!$userDetails->save()) {
            return Redirect::back()->withInput()->withErrors($userDetails->getErrors());
        }
        
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
            $userDetails->delete();
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
            $userDetails->delete();
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            echo 'User with this login already exists.';
            $userDetails->delete();
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
            $userDetails->delete();
        }
        
        return 'Success!';
        
    }

}