@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new post')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ trans('sentence.blog.blog') }}
          <small>{{ trans('sentence.blog.post') }}</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> {{ trans('sentence.blog.dashboard') }}</a>
          </li>
          <li><a href="{{ route('backend.blog.index') }}">{{ trans('sentence.blog.blog') }}</a></li>
          <li class="active">{{ trans('sentence.blog.add') }}</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($post, [
                  'method' => 'POST',
                  'route'  => 'backend.blog.store',
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.blog.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.blog.script')
