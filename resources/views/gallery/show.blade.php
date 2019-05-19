@extends('layouts.main')

@section('content')

    <div class="container box-content">
        <div class="row pt-3">
            @foreach($files as $file)
                <div class="img-gallery col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src='{{$root}}{{basename($file)}}'
                             alt="Card image cap">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                    <div class="carousel-inner">
                        @foreach($files as $index => $file)
                            <div class="carousel-item">
                                <img class="d-block w-100" src='{{$root}}{{basename($file)}}'
                                     alt="">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            $('#myModal').hide();

            $(".img-gallery").click(function () {
                var index = parseInt($(this).index());

                $('.carousel-item:not(:eq(-9999))').removeClass('active');
                $('.carousel-item:eq(' + index + ') ').addClass('active');
                $('#myModal').modal('show');
            });
        });
    </script>

@endsection
