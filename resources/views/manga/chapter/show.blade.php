@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-xs-12 col-md-8">
                {{--    Page Navigator    --}}
                <nav aria-label="Page navigation example" id="page-navigator">
                    <ul class="pagination justify-content-center">
                        <li>
                            <select class="form-control chapter-selector text-secondary">
                                @foreach($chapters->reverse() as $chapter)
                                    @if($cid == $chapter->cid)
                                        <option selected value="{{$chapter->cid}}">
                                            Ch.{{$chapter->no}} {{$chapter->title}}</option>
                                    @else
                                        <option value="{{$chapter->cid}}">
                                            Ch.{{$chapter->no}} {{$chapter->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </li>
                        <li>
                            <select class="form-control page-selector text-secondary">
                            </select>
                        </li>
                        <li class="page-item previous">
                            <a class="form-control text-primary" href="#"><i class="fa fa-chevron-left"
                                                                             aria-hidden="true"></i>&nbsp;Page</a>
                        </li>
                        <li class="page-item next">
                            <a class="form-control text-primary" href="#">Page&nbsp;<i class="fa fa-chevron-right"
                                                                                       aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2"></div>
        </div>

        {{--    Loop    --}}
        <div id="loop" class="mb-3">
            @foreach($files as $file)
                <div class="row">
                    <div class="col-md-12 col-md-offset-5">
                        <img src='{{$root}}{{basename($file)}}' class="img-fluid img-thumbnail" alt="Responsive image"
                             style="width: 80%;height: auto;">
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-xs-12 col-md-8">
                    {{--    Page Navigator    --}}
                    <nav aria-label="Page navigation example" id="page-navigator">
                        <ul class="pagination justify-content-center">
                            <li>
                                <select class="form-control chapter-selector text-secondary">
                                    @foreach($chapters->reverse() as $chapter)
                                        @if($cid == $chapter->cid)
                                            <option selected value="{{$chapter->cid}}">
                                                Ch.{{$chapter->no}} {{$chapter->title}}</option>
                                        @else
                                            <option value="{{$chapter->cid}}">
                                                Ch.{{$chapter->no}} {{$chapter->title}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <select class="form-control page-selector text-secondary">
                                </select>
                            </li>
                            <li class="page-item previous">
                                <a class="form-control text-primary" href="#"><i class="fa fa-chevron-left"
                                                                                 aria-hidden="true"></i>&nbsp;Page</a>
                            </li>
                            <li class="page-item next">
                                <a class="form-control text-primary" href="#">Page&nbsp;<i class="fa fa-chevron-right"
                                                                                           aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2"></div>
            </div>

        </div>

        <script>
            $(document).ready(function () {

                var numOfItem = $('#loop .row').length;
                var index = 0;

                // Hide all pages except first page
                $('#loop .row:gt(0)').hide();

                // append
                var i;
                for (i = 1; i < numOfItem + 1; i++) {
                    $('#page-navigator .page-selector').append("<option>" + i + "</option>");
                }

                // Click image
                $("#loop .row").click(function () {
                    $('#loop .row:eq(' + index + ') ').hide();
                    if (index < numOfItem - 1)
                        index = index + 1;

                    $(".page-selector").val(index + 1);
                    $('#loop .row:eq(' + index + ') ').show();
                    $("html,body").animate({scrollTop:0},"slow");
                });

                // Click previous page btn
                $("#page-navigator .previous").click(function () {
                    $('#loop .row:eq(' + index + ') ').hide();
                    if (index > 0)
                        index = index - 1;

                    $(".page-selector").val(index + 1);
                    $('#loop .row:eq(' + index + ') ').show();
                });

                // Click next page btn
                $("#page-navigator .next").click(function () {
                    $('#loop .row:eq(' + index + ') ').hide();
                    if (index < numOfItem - 1)
                        index = index + 1;

                    $(".page-selector").val(index + 1);
                    $('#loop .row:eq(' + index + ') ').show();
                });

                // Change page selector
                $(".page-selector").change(function () {
                    var c = parseInt($(this).children('option:selected').text()) - 1;
                    $('#loop .row:not(:hidden)').hide();
                    $('#loop .row:eq(' + c + ') ').show();
                    index = c;
                    $(".page-selector").val(index + 1);
                })

                // Change chapter selector
                $(".chapter-selector").change(function () {
                    var id = parseInt($(this).children('option:selected').val());
                    var url = '{{route('manga.show', $mid)}}' + '/' + id;
                    window.location.replace(url);
                })

            });

        </script>

@endsection
