<?php

    public class post
    {
        private static post instance = new post();
        
        private function __construct()
        {
        }
        
        public static function getPost()
        {
            return instance;
        }
        
        public function getUser()
        {
            // Some implementation....
        }
        
        public function getDate()
        {
            // Some implementation....
        }
        
        public function getContent()
        {
            // Some implementation....
        }
    }
?>