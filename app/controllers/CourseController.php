<?php


class CourseController extends BaseController {
    
    public function view($courseId) {
    
        $course = Course::find($courseId);
        
        
    
    }
    
    public function localCourses() {
    
        $user = Sentry::getUser();
        $userDetails = UserDetails::where('email', '=', $user->email)->get();
        
        $courses = Course::where('pincode', '=', $userDetails->pincode)->get();
    
    }
    
    public function createCourse() {
        
        $course = new Course;
        $user = Sentry::getUser();
        
        $course->course_name = Input::get('course_name');
        $course->starts_on = date("Y-m-d h:i:s", strtotime(Input::get('starts_on')));
        $course->ends_on = date("Y-m-d h:i:s", strtotime(Input::get('ends_on')));
        $course->description = Input::get('description');
        $course->intro_video_url = Input::get('video_url');
        $course->pincode = Input::get('pin_code');
        $course->creator = $user->email;
        $course->save();
        
        return Redirect::back();
        
    }
    
    public function enrollCourse($courseId) {
        
        $user = Sentry::getUser();
        
        $userCourse = new UserCourse;
        $userCourse->email = $user->email;
        $userCourse->course_id = $courseId;
        $userCourse->completed = 0;
        
        $userCourse->save();
        
        return Redirect::back();
        
    }
    
    public function unenrollCourse($courseId) {
        
        $user = Sentry::getUser();
        
        DB::table('user_course')->where('email', '=', $user->email)->where('course_id', '=', $courseId)->delete();
        
        return Redirect::back();
    
    }

}