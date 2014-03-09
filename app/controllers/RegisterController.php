<?php


class RegisterController extends BaseController {

    public function index() {
        $error = Session::get('error');
        $errors = Session::get('errors');
        if(!empty($error) || !empty($errors))
        return View::make('register')->with('error', $error);
        else 
        return View::make('register');
    }
    
    public function registerUser() {
        
        
        try
        {
            DB::connection()->getPdo()->beginTransaction();
            // Create the user
            $user = Sentry::createUser(array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password'),
                'activated' => true,
            ));

            // Find the group using the group id
            $adminGroup = Sentry::findGroupById(Input::get('group'));;

            // Assign the group to the user
            $user->addGroup($adminGroup);
            
            
        
        
            $userDetails = new UserDetails;
            $userDetails->first_name = Input::get('first_name');
            $userDetails->last_name = Input::get('last_name');
            $userDetails->dob = date("Y-m-d", strtotime(Input::get('dob')));
            $userDetails->uid = Input::get('uid');
            $userDetails->email = Input::get('email');

            if(!$userDetails->save()) {
                Session::flash('errors', $userDetails->getErrors());
                return Redirect::back();
            }
            
            DB::connection()->getPdo()->commit();
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            DB::connection()->getPdo()->rollBack();
            Session::flash('error', 'Login is required.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            DB::connection()->getPdo()->rollBack();
            Session::flash('error', 'Password is required.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            DB::connection()->getPdo()->rollBack();
            Session::flash('error', 'User exists.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            DB::connection()->getPdo()->rollBack();
            Session::flash('error', 'Group not found.');
            return Redirect::back();
        }
        
        return Redirect::to('login');
        
    }

}