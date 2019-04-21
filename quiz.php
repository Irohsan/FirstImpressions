<?php
    include_once 'utility.php';
    
    class Quiz
    {
        private $quiz;
        
        public function __construct(){}
        
        public function getQuiz( $post_id )
        {
            $results = queryDatabase("Quiz", "post_id", "WHERE post_id = '$post_id'");
            $this->quiz = $results["post_id"];
        }
        
        public function createQuiz( $post_id, $answer, $potential_answer, $question )
        {
            $columns = array( "post_id", "answer", "potential_answer", "question" );
            $values = array( $post_id, $answer, $potential_answer, $question );
            
            insertInto("Quiz", $columns, $values );
        }
        
        public function getAnswer()
        {
            $results = queryDatabase("Quiz", "answer", "WHERE post_id = '$this->quiz'");
            return $results["answer"];
        }
        
        public function getPotential()
        {
            $results = queryDatabase("Quiz", "potential_answer", "WHERE post_id = '$this->quiz'");
            return $results["potential_answer"];
        }
        
        public function getQuestion()
        {
            $results = queryDatabase("Quiz", "question", "WHERE post_id = '$this->quiz'");
            return $results["question"];
        }
        
        public function incrementCorrect()
        {
            $right = $this->getCorrectAmount();
            $right += 1;
            
            alterTable("Quiz", '`right`', $right, "WHERE post_id = '$this->quiz'");
        }
        
        public function incrementIncorrect()
        {
            $wrong = $this->getCorrectAmount();
            $wrong += 1;
            
            alterTable("Quiz", "`wrong`", $wrong, "WHERE post_id = '$this->quiz'");
        }
        
        public function getCorrectAmount()
        {
            $results = queryDatabase("Quiz", "right", "WHERE post_id = '$this->quiz'");
            return $results["right"];
        }
        
        public function getCurrentQuiz()
        {
            return $this->quiz;
        }
    }
?>