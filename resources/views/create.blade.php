@include('layouts.header')

<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"> Create </li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area pt-60 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Create Magazine </h4>
                        </a>

                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="col-12">

                                </div>
                                <div class="login-register-form">
                                    <form validate="true" method="POST" action="{{ url('magazineupdate') }}" enctype="multipart/form-data"  autocomplete="off">

                                        {{ csrf_field() }}
                                        <input placeholder="Name" name="name" type="Name" required class="form-control form-control_1" id="magazinename" maxlength="254">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                        <input type="text" required name="price" type="price" maxlength="12" class="form-control noOnly phone" placeholder="Price" id="magazineprice"  onpaste="return false;">

                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif


                                        <select name="frequency" class="form-control sp">
                                            <option value="daily">Daily</option>
                                            <option value="weekly">Weekly</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="yearly">Yearly</option>
                                        </select>
                                        @if ($errors->has('frequency'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('frequency') }}</strong>
                                            </span>
                                        @endif
          
          
                                      <div class="col-xs-12 inputGroupContainer" style="margin-top: 20px;"> 
                                       <label for="file-upload1" class="custom-file-upload"> <i class="fa fa-cloud-upload"></i> Upload Image </label>
                                        <input id="file-upload1" name='front' type="file"  style="display:none;">
                                      <img id="doc1" width="100px"  height="100px" class="img-responsive" />
                                       
                                         @if ($errors->has('front'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('front') }}</strong>
                                                </span>
                                            @endif
                                      </div>

                                        <div class="button">
                                            
                                            <button type="submit" class="btn-style-2" style="margin-top: 20px;">Submit</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer-bottom black-bg-2 pb-25 pt-25">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copyright text-center">
                    <p>


                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved


                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

  <script>
    function readURL1(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#doc1').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#file-upload1").change(function() {
      var fsize1 = this.files[0].size/1024/1024;  
      if(fsize1 < 1)
      { 
        $("#file-name1").text(this.files[0].name);
          readURL1(this);
      } else { 
        alert('Not Exceed above 1 MB');
        $('#file-upload1').val('');
      } 
    });
  </script>