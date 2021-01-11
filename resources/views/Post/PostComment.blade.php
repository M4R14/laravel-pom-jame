
@extends('layouts.app')
@section('content')

@if ($errors->all())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach
</ul>
@endif
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


		<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet"> 
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="C:\Users\Chayut\Documents\GitHub\laravel-pom-jame\resources\css\post.css" rel="stylesheet"> 
        <style>
        /*
*
* ===========================================================
*     HERO SECTION
* ===========================================================
*
*/
.hero {
    padding: 6.25rem 0px !important;
    margin: 0px !important;
  }
  .cardbox {
    border-radius: 3px;
    margin-bottom: 20px;
    padding: 0px !important;
  }
  
  /* ------------------------------- */
  /* Cardbox Heading
  ---------------------------------- */
  .cardbox .cardbox-heading {
    padding: 16px;
    margin: 0;
  }
  .cardbox .btn-flat.btn-flat-icon {
   border-radius: 50%;
   font-size: 24px;
   height: 32px;
   width: 32px;
   padding: 0;
   overflow: hidden;
   color: #fff !important;
   background: #b5b6b6;
   
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  }
  .cardbox .float-right .dropdown-menu{
    position: relative;
    left: 13px !important;  
  }
  .cardbox .float-right a:hover{
    background: #f4f4f4 !important;	
  }
  .cardbox .float-right a.dropdown-item {
    display: block;
    width: 100%;
    padding: 4px 0px 4px 10px;
    clear: both;
    font-weight: 400;
    font-family: 'Abhaya Libre', serif;
    font-size: 14px !important;
    color: #848484;
    text-align: inherit;
    white-space: nowrap;
    background: 0 0;
    border: 0;
  }
  
  /* ------------------------------- */
  /* Media Section
  ---------------------------------- */
  .media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
  }
  .d-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .media .mr-3{
    margin-right: 1rem !important;
  }
  .media img{
    width: 48px !important;
    height: 48px !important;
    padding: 2px;
    border: 2px solid #f4f4f4;
  } 
  .media-body {
    -ms-flex: 1;
    flex: 1;
    padding: .4rem !important;
  }
  .media-body p{
    font-family: 'Rokkitt', serif;	
    font-weight: 500 !important;
    font-size: 14px;
    color: #88898a;
  }
  .media-body small span{
    font-family: 'Rokkitt', serif;	
    font-size: 12px;
    color: #aaa;
    margin-right: 10px;
  }
  
  
  /* ------------------------------- */
  /* Cardbox Item
  ---------------------------------- */
  .cardbox .cardbox-item {
      position: relative;
      display: block;
  }
  .cardbox .cardbox-item img{
  }
  .img-responsive{
      display: block;
      max-width: 100%;
      height: auto;
  }	
  .fw {
      width: 100% !important;
      height: auto;
  }
  
  
  /* ------------------------------- */
  /* Cardbox Base
  ---------------------------------- */
  .cardbox-base{
   border-bottom: 2px solid #f4f4f4;
  }	
  .cardbox-base ul{
   margin: 10px 0px 10px 15px!important; 
   padding: 10px !important;
   font-size: 0px;	
    display: inline-block;
  }
  .cardbox-base li {
    list-style: none;
    margin: 0px 0px 0px -8px !important;
    padding: 0px 0px 0px 0px !important;
    display: inline-block;
  }
  
  .cardbox-base li a{
    margin: 0px !important;
    padding: 0px !important;
  }
  .cardbox-base li a i{
   position: relative;
   top: 4px; 
   font-size: 16px;
   color: #8d8d8d;
   margin-right: 15px;
  }
  .cardbox-base li a span{
   font-family: 'Rokkitt', serif;
   font-size: 14px;
   color: #8d8d8d;
   margin-left: 20px;
   position: relative;
   top: 5px; 
  }
  .cardbox-base li a em{
   font-family: 'Rokkitt', serif;
   font-size: 14px;
   color: #8d8d8d;
   position: relative;
   top: 3px; 
  }
  .cardbox-base li a img{
    width: 25px;
    height: 25px;
    margin: 0px !important;
    border: 2px solid #fff;
  }
  
  
  /* ------------------------------- */
  /* Cardbox Comments
  ---------------------------------- */
  .cardbox-comments{
    padding: 10px 40px 20px 40px !important;
    font-size: 0px;	
    text-align: center;
    display: inline-block;
  }
  .cardbox-comments .comment-avatar img{
    margin-top: 1px;
    margin-right: 10px;
    position: relative;
    display: inline-block;
    text-align: center;
    width: 40px;
    height: 40px;
  }
  .cardbox-comments .comment-body {
    overflow: auto;
  }
  .search {
   position: relative;
   right: -60px;
   top: -40px;
   margin-bottom: -40px;
   border: 2px solid #f4f4f4;	
   width: 100%;
   overflow: hidden;
  }
  .search input[type="text"] {
   background-color: #fff;
   line-height: 10px;
   padding: 15px 60px 20px 10px;
   border: none;
   border-radius: 4px;
   width: 350px;
   font-family: 'Rokkitt', serif;
   font-size: 14px;
   color: #8d8d8d;
   height: inherit;
   font-weight: 700;
  }
  .search button {
   position: absolute;
   right: 0;
   top: 0px;
   border: none;
   background-color: transparent;
   color: #bbbbbb;
   padding: 15px 25px;
   cursor: pointer;
   
   display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  }
  .search button i {
   font-size: 20px;
   line-height: 30px;
   display: block;
  }
  
  
  /* ------------------------------- */
  /* Author
  ---------------------------------- */
  .author a{
   font-family: 'Rokkitt', serif;
   font-size: 16px;
   color: #00C4CF;
  }
  .author p{
   font-family: 'Rokkitt', serif;
   font-size: 16px;
   color: #8d8d8d;
  }



  /* ============================================= */

  body{
    margin-top:20px;
    background-color:#e9ebee;
}

.be-comment-block {
    margin-bottom: 50px !important;
    border: 1px solid #edeff2;
    border-radius: 2px;
    padding: 50px 70px;
    border:1px solid #ffffff;
}

.comments-title {
    font-size: 16px;
    color: #262626;
    margin-bottom: 15px;
    font-family: 'Conv_helveticaneuecyr-bold';
}

.be-img-comment {
    width: 60px;
    height: 60px;
    float: left;
    margin-bottom: 15px;
}

.be-ava-comment {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.be-comment-content {
    margin-left: 80px;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-name {
    font-size: 13px;
    font-family: 'Conv_helveticaneuecyr-bold';
}

.be-comment-content a {
    color: #383b43;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-time {
    text-align: right;
}

.be-comment-time {
    font-size: 11px;
    color: #b4b7c1;
}

.be-comment-text {
    font-size: 13px;
    line-height: 18px;
    color: #7a8192;
    display: block;
    background: #f6f6f7;
    border: 1px solid #edeff2;
    padding: 15px 20px 20px 20px;
}



        </style>


	    <!-- ==============================================
	    Hero
	    =============================================== -->

        
         <div class="container">
          <div class="row">	
		  
		   <div class="col-lg-6 offset-lg-3">
			
			<div class="cardbox shadow-lg bg-white">
			 
			 <div class="cardbox-heading">
			  <!-- START dropdown-->
		
			  <div class="media m-0">
			   <div class="d-flex mr-3">
				<a href=""><img class="img-fluid rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg" alt="User"></a>
			   </div>
			   <div class="media-body">
               @foreach($userComment as $rowuser)
               @if ($rowuser->id == $user->username)
                {{ $rowuser->name }} <br>
                @endif
               @endforeach
				<small><span><i class="icon ion-md-time"></i> {{ $user->created_at }}</span></small>
			   </div>
			  </div><!--/ media -->
			 </div><!--/ cardbox-heading -->
			  
			 <div class="cardbox-item">
             <div class="ml-4">{{ $user->PostMes }}</div>
			  <img class="img-fluid" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/1.jpg" alt="Image">
			 </div><!--/ cardbox-item -->
			 <div class="cardbox-base">
			  <ul class="float-right">
			   <li><a><i class="fa fa-comments"></i></a></li>
			   <li><a><em class="mr-5">12</em></a></li>
			   <!-- <li><a><i class="fa fa-share-alt"></i></a></li>
			   <li><a><em class="mr-3">03</em></a></li> -->
			  </ul>
			  <ul>
			   <li><a><i class="fa fa-thumbs-up"></i></a></li>
			  
			   <li><a><span>242 Likes</span></a></li>
			  </ul>			
                 
			 </div><!--/ cardbox-base -->
            
           

          

            
        
            <div class="container">
	<h1 class="comments-title">Comments (3)</h1>
    @foreach($commentData as $row)
            
	<div class="be-comment">
		<div class="be-img-comment">	
			<a href="blog-detail-2.html">
				<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
			</a>
		</div>@foreach($userComment as $rowuser)
		<div class="be-comment-content">
			
				<span class="be-comment-name">
                @if ($row->comment_holder == $rowuser->id)<a href="blog-detail-2.html">{{ $rowuser->name }}</a>
					</span>
				<span class="be-comment-time">
					<i class="fa fa-clock-o"></i>
					May 27, 2015 at 3:14am
				</span>

			<p class="be-comment-text">
            {{ $row->commentMes }}
			</p>
		</div>@endif
	</div>
	@endforeach <br>
            @endforeach
	</div>
          
            

			 <div class="cardbox-comments">
			  <span class="comment-avatar float-left">
			   <a href=""><img class="rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg" alt="..."></a>                            
			  </span>
			  <div class="search">
              {!! Form::open(['action' => ['App\Http\Controllers\CommentpostController@store',$data->id],'method'=>'POST']) !!}
            <div class="col-md-6 "> 
                 <div clss="form-group">
                    {!! Form::label('Comment') !!}
                    {!! Form::text('commentMes',null,["class"=>"form-control"])!!}
                 </div>

                    {!! Form::hidden('post_holder',$user->id,["class"=>"form-control"])!!}
       
            </div>

			   <button><input type="submit" value="comment" class="btn btn-primary"></button>
               {!! Form::close() !!}
			  </div>
			 </div>		  
             
			</div><!--/ cardbox -->

           </div><!--/ col-lg-6 -->	
		  

          </div><!--/ row -->

         </div><!--/ container -->



<!-- <div class="container">
@if ($errors->all())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach
</ul>
@endif
{{ $user->FileImg }}<br>
{{ $user->PostMes }}
<br>
Comment <br>
@foreach($commentData as $row)
{{ $row->commentMes }}


@foreach($userComment as $rowuser)

@if ($row->comment_holder == $rowuser->id)
{{ $rowuser->name }}
@endif

@endforeach
<br>
@endforeach




{!! Form::open(['action' => ['App\Http\Controllers\CommentpostController@store',$data->id],'method'=>'POST']) !!}
    <div class="col-md-6 "> 
        <div clss="form-group">
        {!! Form::label('Comment') !!}
        {!! Form::text('commentMes',null,["class"=>"form-control"])!!}
        </div>

        {!! Form::hidden('post_holder',$user->id,["class"=>"form-control"])!!}
        <input type="submit" value="comment" class="btn btn-primary">
        <a href="/post" class="btn btn-success">กลับ</a>
    </div>

{!! Form::close() !!}
<div> -->
@endsection