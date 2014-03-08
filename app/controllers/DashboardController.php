<?php


class DashboardController extends BaseController {

    public function index() {
    
        $user = Sentry::getUser();
        $userDetails = UserDetails::where('email', '=', $user->email)->get();
        $userCourseIds = DB::table('user_courses')->where('email', '=', $user->email)->lists('course_id')->get();
        
        foreach($userCourseIds as $course) {
            $userCourses[] = Course::find($course);
        }
        
        $localCourses = Course::where('pincode', '=', $userDetails->pincode)->get();
    
    }
    
    

}