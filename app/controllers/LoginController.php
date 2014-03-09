<?php


class LoginController extends BaseController {
    
    public function index() {
        $error = Session::get('error');
        if(!empty($error))
        return View::make('login')->with('error', $error);
        else 
        return View::make('login');
    }
    
    public function login() {
        
        try
        {
            // Set login credentials
            $credentials = array(
                'email'    => Input::get('email'),
                'password' => Input::get('password'),
            );

            // Try to authenticate the user
            $user = Sentry::authenticate($credentials, false);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            Session::flash('error', 'Login is required.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            Session::flash('error', 'Login is required.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            Session::flash('error', 'Wrong Password.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            Session::flash('error', 'User does not exist.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            Session::flash('error', 'User not activated.');
            return Redirect::back();
        }

        // The following is only required if throttle is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            Session::flash('error', 'User is suspended.');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            Session::flash('error', 'User is banned.');
            return Redirect::back();
        }
        
        return Redirect::to('dashboard');
        
    }
    
}