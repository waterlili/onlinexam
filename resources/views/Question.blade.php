@extends('admin_template')
@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <!-- <div class="box box-primary" style="padding:1% 3%">
            <div class="box-header with-border">
              <h3 class="box-title">Add your question test here:)</h3>
            </div>
        <div id="success"></div>
        <form id="test_add" role="form" action="{{url('/etra_info/add_q')}}" method="POST">
           <div class="form-group" id="question">
          <label>question of test</label>
          <textarea class="form-control" rows="3" name="question" placeholder="Enter ..."></textarea>
          <span class="help-block"><strong id="update-errors-question"></strong></span>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-block btn-success btn-lg">Success</button>
        </div>
         {{ csrf_field() }}
        </form>
      </div> -->
                

    </div>
    
  </div>
  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body pad">
              <div id="success"></div>
              <form id="test_add" role="form" action="{{url('/etra_info/add_q')}}" method="POST">
                  <div class="form-group" id="addQt">
                    <textarea id="question" name="question" rows="10" cols="80">
                       
                    </textarea>
                    
                    <span class="help-block"><strong id="add-errors-question"></strong></span>
                  </div>
                    <div class="form-group">
            <button type="submit" class="btn btn-block btn-success btn-lg">Success</button>
          </div>
           {{ csrf_field() }}
              </form>
            </div>
          </div>
          
        </div>
        <!-- /.col-->
      </div>

  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <div id="success"></div>
              <form id="test_add" role="form" action="{{url('/etra_info/add_q')}}" method="POST">
                  <div class="form-group" id="addQt">
                    <textarea id="editor1" name="question" rows="10" cols="80">
                       
                    </textarea>
                    
                    <span class="help-block"><strong id="add-errors-question"></strong></span>
                  </div>
                    <div class="form-group">
            <button type="submit" class="btn btn-block btn-success btn-lg">Success</button>
          </div>
           {{ csrf_field() }}
              </form>
            </div>
          </div>
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
@endsection
@section('footer')

<script type="text/javascript">
  
$(function(){
    CKEDITOR.timestamp='ABCD';
  });
</script>
<script src="/js/formajax.js" type="text/javascript"></script>
<!-- CK Editor -->
<!-- <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
 -->
 <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
 <script src="/vender/ckeditor/ckeditor/config.js?v=ABCD"></script>
 <!-- Bootstrap WYSIHTML5 -->
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
  });
</script>
@endsection
