<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8" />
    <title>Login Kasir</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/font.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}" type="text/css" />
    
</head>
<body>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xxl">
        
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center">
                <strong>Welcome to Kasir</strong>
            </header>

            {!! Form::open(array('class' => 'panel-body wrapper-lg')) !!}

            @if($errors)
                @foreach ($errors->all() as $message)
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> {{ $message }}
                    </div>
                @endforeach
            @endif

            <div class="form-group">
                <label class="control-label">Email</label>
                {!! Form::email('email','',[ 'placeholder'=>"test@example.com", 'class'=>"form-control input-lg"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label">Password</label>
                {!! Form::password('password',[ 'placeholder'=>"password", 'class'=>"form-control input-lg"]) !!}
            </div>
            {!! Form::submit('Sign in',[ 'class'=>"btn btn-primary"]) !!}
            {!! Form::close() !!}
        </section>
    </div>
</section>


<script src="{{ asset ('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset ('js/bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ asset ('js/app.js') }}"></script>
<script src="{{ asset ('js/app.plugin.js') }}"></script>
<script src="{{ asset ('js/slimscroll/jquery.slimscroll.min.js') }}"></script>

</body>
</html>
