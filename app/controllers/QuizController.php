<?php


class QuizController extends BaseController {
    
    public function index() {
        
    }
    
    public function completeQuiz($quizId) {
            
        $questions = Input::get('question');
        $score = 0;
        $user = Sentry::getUser();
        
        foreach($questions as $key=>$answer) {

            $questionData = Question::find($key);
            if($answer == $questionData->answer)
                $score++;

        }
             
        $userQuiz = new UserQuiz;
        $userQuiz->email = $user->email;
        $userQuiz->score = $score;
        $userQuiz->quiz_id = $quizId;
             
        $userQuiz->save();
             
    }
    
    public function createQuiz($syllabusId) {
        
        try {
            DB::connection()->getPdo()->beginTransaction();
            $quiz = new Quiz;
            $quiz->syllabus_id = $syllabusId;
            $quiz->save();

            $questions = Input::get('question');
            foreach($questions as $question) {

                $questionData = new Question;
                $questionData->question = $question['q'];
                $questionData->save();

                foreach($question['option'] as $option) {
                    $optionData = new Option;
                    $optionData->option = $option;
                    $optionData->question_id = $questionData->id;
                    $optionData->save();
                }

            }  
            DB::connection()->getPdo()->commit();
        } catch (\PDOException $e) {
            // Woopsy
            DB::connection()->getPdo()->rollBack();
            return Redirect::back()->withErrors();
        }   
        
        return Redirect::back();  
        
    }
    
}