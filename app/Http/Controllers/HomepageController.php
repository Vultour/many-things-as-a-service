<?php
namespace App\Http\Controllers;


class HomepageController{
    public function show(){
        return view('homepage', ['services' => $this->getServices()]);
    }

    private function getServices(){
        $services = array();

        // Codename Generator
        $services = [
            'random' => [
                'title'         => 'Random',
                'description'   => 'Random data generator',
                'endpoints'     => [
                    [
                        'path'          => '/random',
                        'description'   => 'Generates a random floating-point number between 0 and 1'
                    ],
                    [
                        'path'          => '/random/:min/:max',
                        'description'   => 'Generates a random integer'
                    ],
                    [
                        'path'          => '/random/secure',
                        'description'   => 'Generates a random floating-point number using our patent-pending "MTaaS Secure Number Generator" algorithm. This is guaranteed to be completely, absolutely and totally secure as confirmed by an undisclosed number of overpriced independent audits.'
                    ]
                ]
            ],
            'leftpad' => [
                'title'         => 'Left Pad',
                'description'   => 'The infamous left pad, now offered as a microservice',
                'endpoints'     => [
                    [
                        'path'          => '/leftpad/:input/:length',
                        'description'   => 'If possible, left-pads the specified :input with spaces until the string is :length characters long'
                    ],
                    [
                        'path'          => '/leftpad/:input/:length/:char',
                        'description'   => 'Left-pads the specified :input with :char until it is :length characters long'
                    ]
                ]
            ],
            'rightpad' => [
                'title'         => 'Right Pad',
                'description'   => 'Complementary to the Left Pad service, we now offer a breakthrough in padding technology - the Right Pad',
                'endpoints'     => [
                    [
                        'path'          => '/rightpad/:input/:length',
                        'description'   => 'If possible, right-pads the specified :input with spaces until the string is :length characters long'
                    ],
                    [
                        'path'          => '/rightpad/:input/:length/:char',
                        'description'   => 'Right-pads the specified :input with :char until it is :length characters long'
                    ]
                ]
            ],
            'loading' => [
                'title'         => 'Loading Bar',
                'description'   => 'Creates beautiful ASCII loading bars',
                'endpoints'     => [
                    [
                        'path'          => '/loading/:done',
                        'description'   => 'Create a default loading bar, indicating :done% as loaded'
                    ],
                    [
                        'path'          => '/loading/:done/:length',
                        'description'   => 'Create a :length long loading bar, with :done% indicated as loaded'
                    ],
                    [
                        'path'          => '/loading/:done/:length/:loadedChar/:loadingChar/:borderChar',
                        'description'   => 'Create a :length long loading bar, with :done% indicated as loaded <br>
                                            :loadedChar will be displayed for segments loaded <br>
                                            :loadingChar will be displayed for segment currently being loaded <br>
                                            :borderChar will be on both sides of the loading bar.'
                    ]
                ]
            ],
            'codename' => [
                'title'         => 'Codename Generator',
                'description'   => 'Generates codenames - http://www.codenamegenerator.com/',
                'endpoints'     => [
                    [
                        'path'          => '/codename/',
                        'description'   => 'Generate a random codename with default settings'
                    ],
                    [
                        'path'          => '/codename/categories',
                        'description'   => 'Display the available categories for each word'
                    ],
                    [
                        'path'          => '/codename/:prefix/:dictionary/:suffix',
                        'description'   => 'Generate a codename with the specified categories for prefix, dictionary and suffix'
                    ]
                ]
            ],
            'bofh-excuses' => [
                'title'         => 'BOFH Excuses',
                'description'   => 'Generates BOFH excuses - http://pages.cs.wisc.edu/~ballard/bofh/',
                'endpoints'     => [
                    [
                        'path'          => '/bofh-excuses',
                        'description'   => 'Generates a random BOFH excuse'
                    ]
                ]
            ],
        ];

        return $services;
    }
}
