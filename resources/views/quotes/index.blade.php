@extends('layouts.master')
@section('PageTitle','Quotes HomePage Title')
@section('Description','Description for the home page,Home description')
@section('content')
    <header class="site-header size-lg text-center" style="background-color: #ad78bc;">
  <div class="container">
    <div class="col-xs-12">
      <h2>Welcome to <mark>our</mark>
   Elearning system!
   <h5 class="font-alt">Search catalogue in one minute</h5>
   <br>
   @includeif('includes.message')
   @include('includes.searchform')
 </h2>
    </div>
  </div>
</header>
    <!-- END Site header -->
    <!-- Main container -->
    <main>
      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <h2>Admin Access Only</h2>
          </header>

          <div class="row jobs-details">
            <!-- START JOB DETAILS -->
              <div class="col-xs-12">
              <div class="jobs-block">
                <header>
                  <a href="{{route('quotes.show')}}"></a>
                  <div class="hgroup">
                    <h4>
            {{-- <a href="{{route('quotes.show')}}">Route to Student Management System.</a> --}}
            <a href="{{url('/student')}}">Route to Student Management System.</a>
                    </h4>
                     <div class="spacer-front"></div>
                  </div>

                </header>

               <footer>
              {{-- <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>2 minutes ago &nbsp; By:&nbsp;<a href="author-jobs-details.html">James Mwirigi</a></div> --}}
                  <div class="action-btn">
                    <a class="btn btn-xs btn-info" href="category-details.html">Backend</a>
                  </div>
                </footer>
              </div>
            </div>
          <!-- END JOB DETAILS -->
          </div>

          <br><br>
    <p class="text-center">
      <ul class="pagination" role="navigation">
      <li class="page-item disabled" aria-label="&laquo; Previous">
        <span class="page-link" aria-hidden="true">&lsaquo;</span></li>
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span></li>
         <li class="page-item">
          <a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">
              </a>
            </li>
            </ul>

</p>

        </div>
      </section>
      <!-- END Recent jobs -->
      @include('includes.categories')
@endsection
