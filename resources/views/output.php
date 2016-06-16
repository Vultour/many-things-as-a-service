<!DOCTYPE html>
<html>
    <head>
        <title>MTaaS - <?php echo $serviceTitle; ?></title>
        <link rel="stylesheet" href="/css/materialize.min.css">
        <style>pre{white-space:pre-wrap;word-wrap:break-word;}</style>
    </head>
    <body>
        <div class="row container">
            <div class="col s6 offset-s3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><?php echo $serviceTitle; ?></span>
                        <p><?php echo $output; ?></p>
                    </div>
                    <div class="card-action">
                    <a href="/">Many-Things-as-a-Service</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
