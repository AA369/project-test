
Only thing missing are wireframes. My Balsamiq account expired and I hadn't done the mobile design
wireframes so I am going to start over and do them all again in Pencil over the weekend. Other than that, I'm ready to go.
I've gone through the checklist. A few outstanding queries below for tomorrow:
- Do I need a 404 page?
- is responsiveness working ok?
- is readme formatted correctly? Text highlighted in pink?
- is more commenting in html sections needed?
- I'm happy with media queries except for contact page (side nav and submit button).
- can the ID be replaced with CLASS so that modal code can be re-used instead of having to write it out each time. I had a go at doing this but wasn't successful.
-  Can we have a look at this requirement - Images always maintain their original aspect ratio when the screen is resized (crop don’t stretch).





<!DOCTYPE html>
<html>
    <head>
        <meta chartset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>codeYoga website</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    </head>
    <body>
        <header class="container-fluid">
           <div class="row">
              <ul id="nav" class="list-inline clearfix ui-menu-color">
                <a href="index.html">
                    <li class="col-xs-4 col-sm-2 logo menuitem general-sub"></li>
                </a>
                <h1>You are all signed up!
                Enjoy your class</h1>
            </ul>
        </div>
        </header>
</html>