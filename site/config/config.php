<?php

return [
    'api' => [
//        'basicAuth' => true,
        'allowInsecure' => true,
    ],

    'routes' => [

        // temps min website redirection
        array(
            'pattern' => array('/students'),
            'action' => function () {
            }
        ),


        array(
            'pattern' => array('/', 'alumni', 'contact', 'home', 'project', 'thesis', 'other'),
            'action' => function () {
                header('Location: https://distortion.mastermediadesign.ch/');
                exit();
            }
        ),

        // ------------------------------------
        // ----------- REDIRECTIONS ----------------
        // ------------------------------------

        array(
            'pattern' => 'head',
            'action' => function () {
                header('Location: https://www.hesge.ch/head/en/programs-research/master-arts-media-design');
                exit();
            }
        ),

        array(
            'pattern' => 'series',
            'action' => function () {
                header('Location: https://www.youtube.com/playlist?list=PLgtKAOz6PaHugBGfX-SjBFRyMsdnp6LsW');
                exit();
            }
        ),

        array(
            'pattern' => 'series',
            'action' => function () {
                header('Location: https://www.youtube.com/playlist?list=PLgtKAOz6PaHugBGfX-SjBFRyMsdnp6LsW');
                exit();
            }
        ),

        array(
            'pattern' => 'opendays',
            'action' => function () {
                header('Location: https://www.hesge.ch/head/evenement/2021/portes-ouvertes-2021-en-ligne');
                exit();
            }
        ),

        array(
            'pattern' => 'Thinking_Machines',
            'action' => function () {
                header('Location: https://distortion.mastermediadesign.ch/Thinking%20Machines/');
                exit();
            }
        ),

        array(
            'pattern' => 'timeline',
            'action' => function () {
                header('https://mastermediadesign.ch/media/pages/files-resources/778873b6a3-1632747754/2021-timeline-jury.pdf');
                exit();
            }
        ),
    ]
];
