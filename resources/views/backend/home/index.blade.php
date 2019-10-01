@extends('layouts.backend.main')

@section('title', 'Raymonds Blog')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ trans('sentence.backend.dashboard') }}
        </h1>
        <ol class="breadcrumb">
          <li class="active"><i class="fa fa-dashboard"></i> {{ trans('sentence.backend.dashboard') }}</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body ">
                      <h3>{{ trans('sentence.backend.welcome') }}</h3>
                      <p class="lead text-muted">{{ trans('sentence.backend.hello') }} {{ Auth::user()->name }}, {{ trans('sentence.backend.welcome') }}</p>

                      <h4>{{ trans('sentence.backend.start') }}</h4>
                      <p><a href="{{ route('backend.blog.create') }}" class="btn btn-primary">{{ trans('sentence.backend.write') }}</a> </p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
