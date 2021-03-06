@extends('layout.MAIN-LAYOUT')

@section('content')

<!--/ row teget -->



<!--/ main text -->
<div class="divider-divova"></div>
<div class="divider-divova"></div>
<div class="divider-divova"></div>

<div class="container">


<!--INBOX -->
  <div class="col-lg-12 teget">
    <h2>INBOX</h2>
  </div>
     <div class="row">       
      
        <div class="col-lg-5 col-sm-5 col-xs-5">
                  <h3>messages from friends</h3>

@foreach (Messages::where('reciever', '=', Auth::user()->id)->get() as $msg)
                  <div class="clearfix well row hover-divs" onclick="location.reload();" style="cursor:pointer;">
                      
                      <div class="col-lg-2 col-sm-3 col-xs-3">
                        <a href=""><img class="friends-avatars-small" src="images/profile/{{User::where('id', '=', $msg->sender)->first()->image}}" alt=""></a>
                      </div>
                      <div class="col-lg-9 col-sm-7 col-xs-7"> 
                        
                          <a href="profile-user-{{User::where('id', '=', $msg->sender)->first()->username}}">{{User::where('id', '=', $msg->sender)->first()->username}}</a>
                        
                      </div>
                      <div class="col-lg-1 col-sm-2 col-xs-2">
                          <button type="button" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div> 
                      <div class="row col-lg-12 col-sm-12">
                          <span class="txt-messages">{{str_limit($msg->message, $limit = 120, $end = '...')}}</span>
                      </div>
                  </div>
@endforeach


                  <div class="col-lg-12 well">
                      <a href="#"><span>load more...</span></a>
                  </div>

        </div>

      

      
        <div class="col-lg-7 col-sm-7 col-xs-7">
                  <h3>NAME FROM FRIEND</h3>
                  <div class="clearfix well row">
                      
                      <div class="col-lg-2 col-sm-2 col-xs-2">
                        <a href=""><img class="friends-avatars-small" src="images/profile/{{User::where('id', '=', 1)->first()->image}}" alt=""></a>
                      </div>
                      <div class="col-lg-9 col-sm-9 col-xs-9"> 
                        
                          <a href="profile-user-{{User::where('id', '=', 1)->first()->username}}">{{User::where('id', '=', 1)->first()->username}}</a>
                        
                      </div>
                      <div class="col-lg-1 col-sm-1 col-xs-1">
                          <button type="button" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      </div> 
                      <div class="row col-lg-12 col-sm-12">
                          <span class="txt-messages">{{Messages::find(1)->message}}</span>
                      </div>
                  </div>

                  
                  <div class="row well">
                    <form role="form">
                      <textarea class="form-control" style="width:100%;" rows="3" placeholder="Reply..."></textarea>
                    </form>
                    <div class="col-lg-4 col-sm-8 col-xs-8">
                      <button type="button" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-paperclip"></span> Add file
                      </button>
                      <button type="button" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-picture"></span> Add image
                      </button>
                    </div>
                    <div class="col-lg-4 col-sm-2 col-xs-2">
                      
                    </div>
                    <div class="col-lg-2 col-lg-offset-2 col-sm-2 ">
                      <button type="button" class="btn btn-default btn-xs">
                        <span> Send</span>
                      </button>
                    </div>
                  </div>
                  
                    
                  

        </div>

      

    </div> 
  </div> 
<!--END OF INBOX -->          
          
   


</div>

<!--/end main text -->
@stop