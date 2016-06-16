<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Many-Things-as-a-Service</title>

<!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>

        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">MTaaS</a>
                <ul class="right">
                    <li><a href="#">Something</a></li>
                </ul>
            </div>
        </nav>

        <div class="section no-pad-bot" id="main">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Many-Things-as-a-Service</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Your final stop for microservices</h5>
                </div>
                <div class="row center">
                    <a href="#" id="start" class="btn-large orange">Get Started</a>
                </div>
                <br><br>
            </div>
        </div>

        <div class="container">
            <div class="section">
<!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>
                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>
                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Easy to work with</h5>
                            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        </div>


        <div class="container">
            <h3 class="center" id="microservices">Available microservices</h2>
            <?php foreach ($services as $service): ?>
            <div class="section">
                <div class="row">
                    <div class="col s4">
                    <h4><?php echo $service['title']; ?></h4>
                    <blockquote><?php echo $service['description']; ?></blockquote>
                    </div>
                    <div class="col s8">
                        <ul class="collection">
                            <?php foreach ($service['endpoints'] as $endpoint): ?>
                            <li class="collection-item avatar">
                                <i class="large material-icons circle green">skip_next</i>
                                <span class="title"><div class="chip"><?php echo $endpoint['path']; ?></div></span>
                                <p><?php echo $endpoint['description']; ?></p>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="orange-text text-lighten-3" href="http://github.com/vultour">vultour</a> | Template by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                </div>
            </div>
        </footer>

    </body>
</html>

