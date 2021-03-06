<?php

return [
    'debug'  => true,

    'routes' => [

        [
            'pattern' => '/',
            'action' => function () {
                header("Access-Control-Allow-Origin: *");
                return page('home');
            }
        ],

        [
            'pattern' => '/projects',
            'action' => function () {
                header("Access-Control-Allow-Origin: *");
                return page('projects');
            }
        ],

        [
            'pattern' => '/students',
            'action' => function () {
                header("Access-Control-Allow-Origin: *");
                return page('students');
            }
        ],


        // ------------------------------------
        // ----------- REDIRECTIONS ----------------
        // ------------------------------------

//        array(
//            'pattern' => 'head',
//            'action' => function () {
//                header('Location: https://www.hesge.ch/head/en/programs-research/master-arts-media-design');
//                exit();
//            }
//        ),
//
//        array(
//            'pattern' => 'series',
//            'action' => function () {
//                header('Location: https://www.youtube.com/playlist?list=PLgtKAOz6PaHugBGfX-SjBFRyMsdnp6LsW');
//                exit();
//            }
//        ),
//
//        array(
//            'pattern' => 'opendays',
//            'action' => function () {
//                header('Location: https://www.hesge.ch/head/evenement/2021/portes-ouvertes-2021-en-ligne');
//                exit();
//            }
//        ),
//
//        array(
//            'pattern' => 'Thinking_Machines',
//            'action' => function () {
//                header('Location: https://distortion.mastermediadesign.ch/Thinking%20Machines/');
//                exit();
//            }
//        ),
//
//        array(
//            'pattern' => 'timeline',
//            'action' => function () {
//                header('Location: https://mastermediadesign.ch/media/pages/files-resources/778873b6a3-1632747754/2021-timeline-jury.pdf');
//                exit();
//            }
//        ),
    ]
];
