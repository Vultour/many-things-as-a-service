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
                    <li><a href="#microservices">List</a></li>
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
                    <a href="#microservices" id="start" class="btn-large orange">Get Started</a>
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
                            <h2 class="center light-blue-text"><i class="material-icons large">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>
                            <p class="light">Are you getting lost in the plethora of microservice providers you need to use to bring your next big idea to life? Or maybe you just have to use that one esoteric language that requires you to write 100 lines of code to generate a <a href="#random">random</a> number. You don't need to worry anymore, we are here to provide the largest suite of microservices in one conveniently priced package.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons large">grade</i></h2>
                            <h5 class="center">Community-approved</h5>
                            <p class="light">To remain relevant, we decided to <a href="https://github.com/Vultour/many-things-as-a-service">open-source</a> our platform like many other popular projects do these days. This enables us to have a bug-free, community-approved codebase without much work from our side.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons large">http</i></h2>
                            <h5 class="center">Suited for everyone</h5>
                            <p class="light">All of our endpoints support multiple output styles based on your <em>Accept:</em> header. These include <em>text/html</em>, <em>text/plain</em>, and the default <em>text/json</em>. No matter what needs you migth have, rest assured we have the right output for you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        </div>


        <div class="container">
            <h3 class="center" id="microservices">Available microservices</h3>
            <?php foreach ($services as $stub => $service): ?>
            <div class="section" id="<?php echo $stub; ?>">
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
                        <p class="grey-text text-lighten-4">We are a group of visionaries with an impressive record of failed start-ups. Many-Things-as-a-Service has been born from the idea that we could steal from all of our competitors at once, and offer the result at a heftily marked-up price.</p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Contact</h5>
                        <ul>
                            <li><a class="white-text" href="https://github.com/Vultour/many-things-as-a-service">Enterprise enquiries</a></li>
                            <li><a class="white-text" href="https://github.com/Vultour/many-things-as-a-service">Found a bug?</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Careers</h5>
                        <ul>
                            <li><a class="white-text" href="https://github.com/Vultour/many-things-as-a-service">Open positions</a></li>
                            <li><a class="white-text" href="https://github.com/Vultour/many-things-as-a-service">Working at MTaaS</a></li>
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

