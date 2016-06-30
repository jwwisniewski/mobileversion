@extends('master')

@section('content')
<!--<div class="page-header">
  <h1>
    {!! $matchedInstance->title !!}
  </h1>
</div>-->

<div class="container-fluid contact product">
  <div class="row">		
    <div class="col-xs-12 col-sm-4">
      <script type="text/javascript">
        function om(m) {
          t = '';
          for (i = m.length - 1; i >= 0; i--)
            if (m.charAt(i) == '*')
              t += '@';
            else
              t += m.charAt(i);
          document.write('<a href="mailto:' + t + '" title="' + t + '">' + t + '</a>');
        }
      </script>
      <address>
        {!! $subpage->tresc !!}
      </address>
    </div>
    <div class="col-xs-12 col-sm-8">

      <form action="contact.html" class="myform" method="post" novalidate id="mycomment">
        <div class="row clearfix">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label class="control-label">{{ trans('kontakt.inputs.first') }}</label>
              <div class="controls">
                <input name="first" placeholder="{{ trans('kontakt.inputs.first') }}" class="form-control input-lg requiredField" type="text" data-error-empty="Enter name">
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label class="control-label">{{ trans('kontakt.inputs.last') }}</label>
              <div class=" controls">
                <input name="last" placeholder="{{ trans('kontakt.inputs.last') }}" class="form-control input-lg requiredField" type="email" data-error-invalid="Invalid email address" data-error-empty="Enter email">
              </div>
            </div>
          </div>	
        </div>	
        <div class="row clearfix">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label class="control-label">{{ trans('kontakt.inputs.email') }}</label>
              <div class="controls">
                <input name="email" placeholder="{{ trans('kontakt.inputs.email') }}" class="form-control input-lg requiredField" type="text" data-error-empty="Enter name">
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label class="control-label">{{ trans('kontakt.inputs.phone') }}</label>
              <div class=" controls">
                <input name="phone" placeholder="{{ trans('kontakt.inputs.phone') }}" class="form-control input-lg" type="email" data-error-invalid="Invalid email address" data-error-empty="Enter email">
              </div>
            </div>
          </div>	
        </div>	
        <div class="form-group">
          <label class="control-label">{{ trans('kontakt.inputs.message') }}</label>
          <div class="controls">
            <textarea name="comments" placeholder="{{ trans('kontakt.inputs.message') }}" class="form-control input-lg requiredField" rows="5" data-error-empty="Enter message"></textarea>
          </div>
        </div>
        <p><button name="submit" type="submit" class="btn btn-store btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Email Sent">{{ trans('kontakt.ui.send') }}</button></p>
        <input type="hidden" name="submitted" id="submitted3" value="true">
      </form>	
    </div>		

  </div>	
</div>
@endsection
