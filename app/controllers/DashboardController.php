<?php


class DashboardController extends BaseController {

    private function truncate($input, $maxWords, $maxChars)
    {
        $words = preg_split('/\s+/', $input);
        $words = array_slice($words, 0, $maxWords);
        $words = array_reverse($words);

        $chars = 0;
        $truncated = array();

        while(count($words) > 0)
        {
            $fragment = trim(array_pop($words));
            $chars += strlen($fragment);

            if($chars > $maxChars) break;

            $truncated[] = $fragment;
        }

        $result = implode($truncated, ' ');

        return $result . ($input == $result ? '' : '...');
    }

    public function index() {
    
        $user = Sentry::getUser();
        $userDetails = UserDetails::where('email', '=', $user->email)->first();
        $userCourseIds = DB::table('user_courses')->where('email', '=', $user->email)->lists('course_id');
        
        $userCourses = null;
        
        foreach($userCourseIds as $course) {
            $course = Course::find($course);
            $course->description = $this->truncate($course->description, 35, 150);
            $userCourses[] = $course;
        }
        
        $localCourses = Course::where('pincode', '=', $userDetails->pincode)->get();
        
        $admin = Sentry::findGroupByName('Ngo');
        
        if ($user->inGroup($admin))
        {
            $ngo = true;
        } else $ngo = false;
        
        return View::make('coursedash')->with('userCourses', $userCourses)->with('localCourses', $localCourses)->with('userName', $userDetails->first_name . ' ' . $userDetails->last_name)->with('ngo', $ngo);
    
    }
    
    

}