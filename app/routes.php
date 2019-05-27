<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//Create routes
$app -> get
(
    '/',
    function(Request $request, Response $response)
    {
        $viewData=[];
        $viewData['seo'] = new \StdClass();
        $viewData['seo']->title = 'Portfolio';
        $viewData['seo']->description = 'I am a second year student at HETIC Paris, learning design and web development. Welcome to my Portfolio !';

        $query = $this->db->query('SELECT * FROM project');
        $data_projects = $query->fetchAll();
        $viewData['data_projects'] = $data_projects;

        return $this->view->render($response, 'pages/child/home.twig', $viewData);
    }
)
->setName('home');

$app
    ->get(
        '/about',
        function($request, $response)
        {        
            $viewData = [];
            $viewData['seo'] = new \StdClass();
            $viewData['seo']->title = 'Portfolio';
            $viewData['seo']->description = 'I am a second year student at HETIC Paris, learning design and web development. Welcome to my Portfolio !';

            return $this->view->render($response, 'pages/child/about.twig', $viewData);
        }
    )
    ->setName('about')
;

$app
    ->get(
        '/project/{cate:dev|design}/{proj:[a-z]+}',
        function($request, $response, $arguments)
        {        
            $viewData = [];
            
            $query = $this->db->prepare('SELECT * FROM project WHERE name1 = :arg LIMIT 1');
            $query->bindParam('arg', $arguments['proj']);
            $query->execute();
            $data_project = $query->fetch();
            $viewData['data_project'] = $data_project;

            $viewData['seo'] = new \StdClass();
            $viewData['seo']->title =$viewData['data_project']->title;
            $viewData['seo']->description = 'I am a second year student at HETIC Paris, learning design and web development. Welcome to my Portfolio !';


            return $this->view->render($response, 'pages/child/project.twig', $viewData);
        }
    )
    ->setName('project')
;