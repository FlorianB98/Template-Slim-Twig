<?php

// Home
$app
    ->get(
        '/',
        function($request, $response)
        {
            // View data
            $viewData = [];

            return $this->view->render($response, 'pages/home.twig', $viewData);
        }
    )
    ->setName('home')
;

// Promotions
$app
    ->get(
        '/promotions',
        function($request, $response)
        {
            // Fetch promotions
            $query = $this->db->query('SELECT * FROM promotions');
            $promotions = $query->fetchAll();

            // View data
            $viewData = [];
            $viewData['promotions'] = $promotions;

            return $this->view->render($response, 'pages/promotions.twig', $viewData);
        }
    )
    ->setName('promotions')
;

// Promotion
$app
    ->get(
        '/promotions/{year:[0-9]{4}}',
        function($request, $response, $arguments)
        {
            // View data
            $query = $this->db->query('SELECT id FROM promotions WHERE year='.$arguments['year']);
            $year = $query->fetch();
            $query = $this->db->query('SELECT * FROM students WHERE id_promotion='.$year->id.'');
            $promotion = $query->fetchAll();
            echo '<pre>';
            print_r($promotion);
            echo '</pre>';

            $viewData = [];
            $viewData['promotion'] = $promotion;
            
            return $this->view->render($response, 'pages/promotion.twig', $viewData);
        }
    )
    ->setName('promotion')
;

// Random student
$app
    ->get(
        '/students/random',
        function($request, $response)
        {
            return 'random student';
        }
    )
    ->setName('random_student')
;

// Student
$app
    ->get(
        '/students/{slug:[a-z_-]+}',
        function($request, $response, $arguments)
        {
            $query = $this->db->query('SELECT * FROM students WHERE slug="'.$arguments['slug'].'"');
            $student = $query->fetchAll();
            // View data
            $viewData = [];
            $viewData['student'] = $student;

            return $this->view->render($response, 'pages/student.twig', $viewData);
        }
    )
    ->setName('student')
;

