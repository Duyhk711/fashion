@extends('layouts.client')

@section('content')

  <!-- Body Container -->
  <div id="page-content"> 
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title"><h1>Collection Empty</h1></div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Collection Empty</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">     
        <!--Category Empty-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <p><img src="{{asset('client/images/empty-img.gif')}}" alt="image" width="500" /></p>
                <h2 class="fs-4 mt-4"><strong>SORRY,</strong> This Category is currently empty</h2>
                <p class="mb-4">There are no products matching the selection.</p>
                <p class="same-width-btn"><a href="index.html" class="btn btn-secondary btn-lg mb-2 mx-3">GO Back</a><a href="category-3columns.html" class="btn btn-lg mb-2">Continue shopping</a></p>
            </div>
        </div>
        <!--End Category Empty-->
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->

@endsection
