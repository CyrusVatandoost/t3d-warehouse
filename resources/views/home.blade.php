@extends('layout.app')

@section('title', 'Home')

@section('style')
<style type="text/css">
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #9CCC65; /* Set a background color */
    color: #404040; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    width: 3.5em;
}

#myBtn:hover span {
  display: none;
}

#myBtn:hover:before {
  opacity: 1;
  right: 0;
  content: '\25B2';
}

@media screen and (max-width: 700px) {
  #myBtn {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  }
}

.text-black{
  color: black;
}
</style>
@endsection

@section('modals')
  @include('modals.project-new')
  @include('modals.announcement-new')
@endsection

@section('left-sidenav')
  <p><a href="#modal-container-new-announcement" class="btn btn-primary btn-block" role="button" data-toggle="modal">New Announcement</a></p>
  <p><a href="#modal-container-new-project" role="button" class="btn btn-primary btn-block" data-toggle="modal">New Project</a></p>
@endsection


@section('body')
<script type="text/javascript">
  // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

<div class="container">

  @if($announcements->isEmpty())
    <h3 class="display-4 | color">No announcements yet</h3>

  <!-- does not support archiving announcements yet -->
  <!-- @foreach($announcements as $a)
    @if($a->visibility == 0)

    @endif
  @endforeach -->

  @else
    @foreach($announcements as $announcement)
    <p>
      @if($announcement->visibility == 1)
      <div class="row row-striped">
        <div class="col-12"> 
          <a href="/announcement/{{ $announcement->announcement_id }}">
            <h1 class="text-uppercase announcement-title limit-header-announcement">
            <strong> {{ $announcement->name }} </strong>
            </h1>
          </a>
          <p class="display-12 small">Posted by <a class="font-italic text-black" href="/account/{{$announcement->user->user_id}}"> {{ $announcement->user->first_name}} {{ $announcement->user->last_name }} </a><br>
          {{ $announcement->created_at->diffForHumans() }} (Expires on {{ $announcement->expires_on }})</p>
         <h3 class="limit"><small>{{ $announcement->description }}</small></h6>  

        </div>
      </div>
      @endif
    @endforeach
    {{ $announcements->links('vendor.pagination.simple-bootstrap-4') }}  
  </p> 
  @endif
  <button onclick="topFunction()" class="rounded-circle" id="myBtn" title="Go to top"><span>Top</span></button>
  </div>

@endsection

<!-- right-sidenav -->
@section('right-sidenav')
  <!-- insert featured projects here -->
  @include('layout.right-sidenav')
@endsection

@section('scripts')
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Include date range picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
@endsection
