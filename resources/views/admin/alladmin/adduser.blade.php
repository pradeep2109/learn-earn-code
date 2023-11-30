@extends('admin.layouts.master')
@section('title','Create a new admin')
@section('maincontent')
<?php
$data['heading'] = 'Admin';
$data['title'] = 'Admin';
?>
@include('admin.layouts.topbar',$data)
<div class="contentbar">
  @if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
  <div class="row">
    <div class="col-lg-12">
      <div class="card dashboard-card m-b-30">
        <div class="card-header">
          <h5 class="box-tittle">{{ __('Add') }} {{ __('Admin') }}</h5>
          <div>
            <div class="widgetbar">
              <a href="{{url('user')}}" class="float-right btn btn-primary-rgba mr-2"><i
                  class="feather icon-arrow-left mr-2"></i>{{ __('Back') }}</a> </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('alladmin.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="bg-info-rgba p-4 mb-4">
              <h4 class="pb-4">Personal Details</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-dark" for="fname">
                      {{ __('FirstName') }}:<sup class="text-danger">*</sup>
                    </label>
                    <input value="{{ old('fname') }}" autofocus required name="fname" type="text" class="form-control"
                      placeholder="{{ __('Please') }} {{ __('Enter') }} {{ __('FirstName') }}" />
                  </div>
                  <div class="form-group">
                    <label class="text-dark" for="mobile">{{ __('Email') }}: <sup
                        class="text-danger">*</sup></label>
                    <input value="{{ old('email')}}" required type="email" name="email"
                      placeholder=" {{ __('Please') }} {{ __('Enter') }} {{ __('Email') }}"
                      class="form-control">
                  </div>

                  <div class="form-group">
                    <label class="text-dark" for="mobile">{{ __('Password') }}: <sup
                        class="text-danger">*</sup> </label>
                    <input required type="password" name="password"
                      placeholder="{{ __('Please') }} {{ __('Enter') }} {{ __('Password') }}"
                      class="form-control">
                  </div>

                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-dark" for="lname">
                      {{ __('LastName') }}:<sup class="text-danger">*</sup>
                    </label>
                    <input value="{{ old('lname')}}" required name="lname" type="text" class="form-control"
                      placeholder="{{ __('Please') }} {{ __('Enter') }} {{ __('LastName') }}" />
                  </div>

                
                  <div class="form-group">
                    <label class="text-dark" for="mobile">{{ __('Mobile') }}: <sup
                        class="text-danger">*</sup></label>
                    <input value="{{ old('mobile')}}" required type="text" name="mobile"
                      placeholder="{{ __('Please') }} {{ __('Enter') }} {{ __('Mobile') }}"
                      class="form-control">
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="bg-info-rgba p-4 mb-4">
              <h4 class="pb-4">Personal Details</h4>
              <div class="row">
                <div class="col-md-6">
                  <input name="role" type="hidden" value="admin">

                  <div class="form-group">
                    <label class="text-dark" for="exampleInputDetails">{{ __('Address') }}:</label>
                    <textarea name="address" rows="1" class="form-control"
                      placeholder="{{ __('Please') }} {{ __('Enter') }} address"></textarea>
                  </div>

                
                  <div class="form-group">
                    <label class="text-dark" for="state_id">{{ __('State') }}: </label>
                    <input type="text" class="form-control state" placeholder="{{ __('Please') }} {{ __('Enter') }} State" readonly>     
                    <input type="hidden" name="state_id" class="state_id"> 
                  </div>


                  <div class="form-group">
                    <label class="text-dark" for="pin_code">{{ __('Pincode') }}:</sup></label>
                    <input value="{{ old('pin_code')}}" placeholder="{{ __('Please') }} {{ __('Enter') }} pincode"
                      type="text" name="pin_code" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-dark" for="city_id">{{ __('City') }}: </label>
                    <input type="text" class="form-control" placeholder="{{ __('Please') }} {{ __('Enter') }} City" onchange="get_state_country(this.value)" required>
                    <input type="hidden" name="city_id" class="city_id"> 
                    <span class="error text-danger"></span>
                  </div>
                  <div class="form-group">
                    <label class="text-dark" for="city_id">{{ __('Country') }}: </label> 
                    <input type="text" class="form-control country" placeholder="{{ __('Please') }} {{ __('Enter') }} Country" readonly>     
                    <input type="hidden" name="country_id" class="country_id">          
                  </div>
                
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputSlug">{{ __('Image') }}: </label>
                    <small class="text-muted"><i class="fa fa-question-circle"></i>
                      {{ __('Recommended size') }} (410 x 410px)</small>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="user_img" class="custom-file-input" id="user_img_one" aria-describedby="inputGroupFileAddon01" onchange="readURL(this);">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    <div class="thumbnail-img-block mb-3">
                      <img src="{{ url('images/user_img/user.jpg')}}" id="user_img" class="img-fluid" alt="">
                    </div>   
                  </div>
                </div>
              </div>
            </div>


            <div class="bg-info-rgba p-4 mb-4">
              <h4 class="pb-4">Personal Details</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-dark" for="fb_url">
                      {{ __('FacebookUrl') }}:
                    </label>
                    <input autofocus name="fb_url" type="text" class="form-control" placeholder="https://facebook.com/" />
                  </div>
                  <div class="form-group">
                    <label class="text-dark" for="youtube_url">
                      {{ __('YoutubeUrl') }}:
                    </label>
                    <input autofocus name="youtube_url" type="text" class="form-control" placeholder="https://youtube.com/" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-dark" for="twitter_url">
                      {{ __('TwitterUrl') }}:
                    </label>
                    <input autofocus name="twitter_url" type="text" class="form-control" placeholder="https://twitter.com/" />
                  </div>
                  <div class="form-group">
                    <label class="text-dark" for="linkedin_url">
                      {{ __('LinkedInUrl') }}:
                    </label>
                    <input autofocus name="linkedin_url" type="text" class="form-control" placeholder="https://linkedin.com/" />
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="text-dark" for="exampleInputDetails">{{ __('Detail') }}:</label>
              <textarea id="detail" name="detail" rows="3" class="form-control"
                placeholder="{{ __('Please') }} {{ __('Enter') }} {{ __('Detail') }}"></textarea>
            </div>
            <div class="form-group">


              <label for="exampleInputDetails">{{ __('Status') }}</label><br>
              <input id="status_toggle" type="checkbox" class="custom_toggle" name="status" checked />
            

            </div>
            <div class="form-group">
              <button type="reset" class="btn btn-danger-rgba"><i class="fa fa-ban"></i> {{ __('Reset') }}</button>
              <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                {{ __('Create') }}</button>
            </div>
            <div class="clear-both"></div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
@endsection
@section('script')
<script>
  (function ($) {
    "use strict";

    $('#married_status').change(function () {

      if ($(this).val() == 'Married') {
        $('#doaboxxx').show();
      } else {
        $('#doaboxxx').hide();
      }
    });

    $(function () {
      $("#dob,#doa").datepicker({
        changeYear: true,
        yearRange: "-100:+0",
        dateFormat: 'yy/mm/dd',
      });
    });
    $(function () {
      $('#country_id').change(function () {
        var up = $('#upload_id').empty();
        var cat_id = $(this).val();
        
        if (cat_id) {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: @json(url('country/dropdown')),
            data: {
              catId: cat_id
            },
            success: function (data) {
              console.log(data);
              up.append('<option value="0">Please Choose</option>');
              $.each(data, function (id, title) {
                up.append($('<option>', {
                  value: id,
                  text: title
                }));
              });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      });
    });

    $(function () {

      $('#upload_id').change(function () {
        var up = $('#grand').empty();
        var cat_id = $(this).val();
        if (cat_id) {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: @json(url('country/gcity')),
            data: {
              catId: cat_id
            },
            success: function (data) {
              console.log(data);
              up.append('<option value="0">Please Choose</option>');
              $.each(data, function (id, title) {
                up.append($('<option>', {
                  value: id,
                  text: title
                }));
              });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      });
    });
  })(jQuery);
  function get_state_country(params) {
    if(params){
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "GET",
        url: @json(url('get/state/country')),
        data: {
          city: params
        },
        success: function (data) {
          if(data.status=='True'){
              $('.city_id').val(data.city_id);
              $('.state').val(data.state);
              $('.state_id').val(data.state_id);
              $('.country').val(data.country);
              $('.country_id').val(data.country_id);
              $('.error').hide();
          } else {
              $('.city_id').val('');
              $('.state').val('');
              $('.state_id').val('');
              $('.country').val('');
              $('.country_id').val('');
              $('.error').show();
              $('.error').text(data.msg);
          }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
          console.log(XMLHttpRequest);
        }
      });
    }
  }
</script>

@endsection