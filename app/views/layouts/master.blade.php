<html>
    <head>
        <title>Mail Manager</title>
            {{ HTML::style('css/bootstrap.css') }}
            {{ HTML::style('css/bootstrap-responsive.css') }}
            {{ HTML::style('css/style.css') }}
            {{ HTML::style('css/mobile.css') }}
            {{ HTML::style('css/large-desktop.css') }}
            {{ HTML::style('css/prettify.css') }}
            {{ HTML::style('css/jqui/jquery-ui-1.10.3.min.css') }}
            {{ HTML::script('js/jquery-2.0.3.min.js') }}
            {{ HTML::script('js/jquery.dataTables.min.js') }}
            {{ HTML::script('js/jquery-ui-1.10.3.min.js') }}
            {{ HTML::Script('js/jquery.sparkline.min.js') }}
    </head>
    <body>
        <!-- Fixed Navbar in Alto -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mail Manager {{ $title }} </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('home') }}">Home</a</li>
												<li><a href="{{ URL::to('preparazione') }}">Creazione Mail</a></li>
                        <li><a href="{{ URL::to('list') }}">Mail List</a></li>
												<li><a href="{{ URL::to('invio') }}">Mail Sender</a></li>
                    </ul>
                </div>
            </div>
        </div> 
        <!-- Fixed Navbar in alto-->
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>