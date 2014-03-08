<?php


class SyllabusController extends BaseController {

    public function index() {
        
    }
    
    public function addSyllabus($courseId) {
        
        $syllabi = Input::get('syllabus');
        try {
            DB::connection()->getPdo()->beginTransaction();
            foreach($syllabi as $syllabus) {
                
                $syllabusData = new Syllabus;
                $syllabusData->title = Input::get('title');
                $syllabusData->course_id = $courseId;
                $syllabusData->video_url = Input::get('video_url');
                $syllabusData->article = nl2br(Input::get('article'));

                if(empty($syllabusData->video_url)) $syllabusData->type = 'article';
                $syllabusData->type = 'video';            

                $syllabusData->save();
            }
            
            DB::connection()->getPdo()->commit();
        
        } catch (\PDOException $e) {
            
            DB::connection()->getPdo()->commit();
        
        }
        
        return Redirect::back();
        
    }
    
    public function viewSyllabus($syllabusId) {
    
        $syllabus = Syllabus::find($syllabusId);
        
        
    
    }

}