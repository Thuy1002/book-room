@extends('layout.Client.master')
@section('title')
    Rooms
@endsection
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($room as $item)
                            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                                <div class="room">
                                    <a href="{{route('rooms.detail',$item->id)}}" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url('{{ asset('client/images/room-1.jpg') }}');">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3 text-center">
                                        <h3 class="mb-3"><a href="{{route('rooms.detail',$item->id)}}">{{$item->title}}</a></h3>
                                        <p><span class="price mr-2">{{number_format($item->price)}} $</span> <span class="per">for Day</span></p>
                                        <ul class="list">
                                            <li><span>Max:</span> {{$item->capacity}}</li>
                                            <li><span>Size:</span> {{$item->size}} m2</li>
                                            <li><span>View:</span> {{$item->view}}</li>
                                            <li><span>floor:</span> {{$item->floor}}</li>
                                        </ul>
                                        <hr>
                                        <p class="pt-1"><a href="{{route('rooms.detail',$item->id)}}" class="btn-custom">Book Now <span
                                                    class="icon-long-arrow-right"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Advanced Search</h3>
                        <form action="#">
                            <div class="fields">
                                <div class="form-group">
                                    <input type="text" id="checkin_date" class="form-control checkin_date"
                                        placeholder="Check In Date">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="checkin_date" class="form-control checkout_date"
                                        placeholder="Check Out Date">
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Room Type</option>
                                            <option value="">Suite</option>
                                            <option value="">Family Room</option>
                                            <option value="">Deluxe Room</option>
                                            <option value="">Classic Room</option>
                                            <option value="">Superior Room</option>
                                            <option value="">Luxury Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">0 Adult</option>
                                            <option value="">1 Adult</option>
                                            <option value="">2 Adult</option>
                                            <option value="">3 Adult</option>
                                            <option value="">4 Adult</option>
                                            <option value="">5 Adult</option>
                                            <option value="">6 Adult</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">0 Children</option>
                                            <option value="">1 Children</option>
                                            <option value="">2 Children</option>
                                            <option value="">3 Children</option>
                                            <option value="">4 Children</option>
                                            <option value="">5 Children</option>
                                            <option value="">6 Children</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="range-slider">
                                        <span>
                                            <input type="number" value="25000" min="0" max="120000" /> -
                                            <input type="number" value="50000" min="0" max="120000" />
                                        </span>
                                        <input value="1000" min="0" max="120000" step="500" type="range" />
                                        <input value="50000" min="0" max="120000" step="500" type="range" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Star Rating</h3>
                        <form method="post" class="star-rating">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        {{ $room->links('Admin.paginate') }}
    </div>
@endsection