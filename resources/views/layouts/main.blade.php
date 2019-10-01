<!DOCTYPE html>

@if(app()->getLocale())
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
<html lang="en">
@endif

<head>
    <meta charset="UTF-8">
    <title>{{ trans('sentence.frontlayout.myblog') }}</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">{{ trans('sentence.frontlayout.myblog1') }}</a>
            </div>
            
           
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
                <a href ="lang/en" style = 'padding-right:10px;'>English</a>
                <a href ="lang/zh-TW">中文</a>
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ route('blog') }}">{{ trans('sentence.frontlayout.blog') }}</a></li>
                <li><a href="#">{{ trans('sentence.frontlayout.aboutus') }}</a></li>
                <li><a href="#">{{ trans('sentence.frontlayout.details') }}</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; {{ trans('sentence.frontlayout.copyright') }}</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="#" class="i fa fa-facebook"></a></li>
                            <li><a href="#" class="i fa fa-twitter"></a></li>
                            <li><a href="#" class="i fa fa-google-plus"></a></li>
                            <li><a href="#" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
