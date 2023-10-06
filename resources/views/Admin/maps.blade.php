@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->
            <div class="row">
                <div class="col-md-6">
                    <div class="card map p-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424521.98724489537!2d150.6419337943232!3d-33.77156856642666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1476529981265" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card map p-2">
                        <div class="map-canvas" style="height: 400px;"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card map p-2">
                        <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card map p-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1561659.212548834!2d-75.85228750854475!3d40.1397075563189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew+Jersey%2C+USA!5e0!3m2!1sen!2sin!4v1469783585045" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
@endsection
