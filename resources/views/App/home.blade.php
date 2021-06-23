@extends('App/app')
@section('content')

<div class="container">
    <h2 class="title text-center">All Categoreys</h2>
    <div class="row">
        
        <div class="col-md-1">
            <img src="1618276438.png" style="width: 60px;height:60px;border-radius:30px;border:1px solid">
            <p>Pizza</p>
        </div>

        <div class="col-md-1">
            <img src="1618276438.png" style="width: 60px;height:60px;border-radius:30px;border:1px solid">
            <p>Pizza</p>
        </div>

        <div class="col-md-1">
            <img src="1618276438.png" style="width: 60px;height:60px;border-radius:30px;border:1px solid">
            <p>Pizza</p>
        </div>

        <div class="col-md-1">
            <img src="1618276438.png" style="width: 60px;height:60px;border-radius:30px;border:1px solid">
            <p>Pizza</p>
        </div>

    </div>

</div>


<br><br>
<div class="container">
         <div class="col-md-12 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">All Recipies</h2>
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                   <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center shadow-none p-3 bg-light">
                                                            <img src="1618276438.png" width="250px" height="190px" alt="" />
                                                            <h4 style="color: #FE980F">Recipie Name</h4>
                                                            <span class="text-left" style="margin-left: 10px"><b>Categorey:</b>Fast Food</span>
                                                            <span class="text-left" style=""><b>SubCategorey:</b>Piza</span>
                                                            <br><br>
                                                            @if(!empty(Auth::user()))
                                                            <a href="#"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @else
                                                                 <a href="{{url('recipie_detail')}}"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center shadow-none p-3 bg-light">
                                                            <img src="1618276438.png" width="250px" height="190px" alt="" />
                                                            <h4 style="color: #FE980F">Recipie Name</h4>
                                                            <span class="text-left" style="margin-left: 10px"><b>Categorey:</b>Fast Food</span>
                                                            <span class="text-left" style=""><b>SubCategorey:</b>Piza</span>
                                                            <br><br>
                                                            @if(!empty(Auth::user()))
                                                            <a href="#"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @else
                                                                 <a href="{{url('recipie_detail')}}"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center shadow-none p-3 bg-light">
                                                            <img src="1618276438.png" width="250px" height="190px" alt="" />
                                                            <h4 style="color: #FE980F">Recipie Name</h4>
                                                            <span class="text-left" style="margin-left: 10px"><b>Categorey:</b>Fast Food</span>
                                                            <span class="text-left" style=""><b>SubCategorey:</b>Piza</span>
                                                            <br><br>
                                                            @if(!empty(Auth::user()))
                                                            <a href="#"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @else
                                                                 <a href="{{url('recipie_detail')}}"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center shadow-none p-3 bg-light">
                                                            <img src="1618276438.png" width="250px" height="190px" alt="" />
                                                            <h4 style="color: #FE980F">Recipie Name</h4>
                                                            <span class="text-left" style="margin-left: 10px"><b>Categorey:</b>Fast Food</span>
                                                            <span class="text-left" style=""><b>SubCategorey:</b>Piza</span>
                                                            <br><br>
                                                            @if(!empty(Auth::user()))
                                                            <a href="#"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @else
                                                                 <a href="{{url('recipie_detail')}}"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center shadow-none p-3 bg-light">
                                                            <img src="1618276438.png" width="250px" height="190px" alt="" />
                                                            <h4 style="color: #FE980F">Recipie Name</h4>
                                                            <span class="text-left" style="margin-left: 10px"><b>Categorey:</b>Fast Food</span>
                                                            <span class="text-left" style=""><b>SubCategorey:</b>Piza</span>
                                                            <br><br>
                                                            @if(!empty(Auth::user()))
                                                            <a href="#"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @else
                                                                 <a href="{{url('recipie_detail')}}"><button class="btn btn-primary" style="margin-bottom: 10px">Read More</button></a>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>

@endsection