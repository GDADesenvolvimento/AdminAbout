@extends('admin_template')
@section('style')
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">
@endsection

@section('header')
    <h1>
        Sobre
        <small>Conte um pouco sobre você</small>
    </h1>
    <ol class="breadcrumb">
        <li class="active"><i class="fa fa-info-circle"></i>&nbsp; Sobre</li>
    </ol>
@endsection
@section('content')
    @if ( session()->has('success') )
        <div class="alert alert-success">
            <ul>
                <li>{{ session()->get('success') }}</li>
            </ul>
        </div>
    @endif
    <form action="{{ route('about.update') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box">
            <div class="box-body pad">
                <textarea name="about" class="textarea" placeholder="Conte um pouco sobre você" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $about->about }}</textarea>
                <br>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </div><!-- /.box -->
    </form>
@endsection
@section('script')
    <!-- FastClick -->
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
        $(function () {
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>
@endsection