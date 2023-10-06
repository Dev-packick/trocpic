@extends('layouts.admin')
@section('content')
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">
        <div class="content-inner chart-cont">

            
            <!--***** CONTENT *****-->
            <div class="row">
                <div class="col-md-12 first-button">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-link">Link</button>
                <hr></div><br>

                <div class="col-md-12 third-button mt-5">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                <hr></div><br>

                <div class="col-md-12 fourth-button mt-5">
                    <button class="btn btn-danger btn-lg"><i class="fa fa-circle-o-notch fa-spin"></i> Loading</button>
                    <button class="btn btn-danger btn-lg"><i class="fa fa-refresh fa-spin"></i> Loading</button>
                    <button class="btn btn-danger btn-lg"><i class="fa fa-spinner fa-spin"></i> Loading</button>
                <hr></div><br>

                <div class="col-md-12 fifth-button mt-5">
                    <a href="#" target="_blank" class="btn-social btn-behance"><i class="fa fa-behance"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-codepen"><i class="fa fa-codepen"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-deviantart"><i class="fa fa-deviantart"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-digg"><i class="fa fa-digg"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-dribbble"><i class="fa fa-dribbble"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-dropbox"><i class="fa fa-dropbox"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-flickr"><i class="fa fa-flickr"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-foursquare"><i class="fa fa-foursquare"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-github"><i class="fa fa-github-alt"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-jsfiddle"><i class="fa fa-jsfiddle"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-lastfm"><i class="fa fa-lastfm"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-paypal"><i class="fa fa-paypal"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-reddit"><i class="fa fa-reddit"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-skype"><i class="fa fa-skype"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-soundcloud"><i class="fa fa-soundcloud"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-stack-overflow"><i class="fa fa-stack-overflow"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-steam"><i class="fa fa-steam"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-stumbleupon"><i class="fa fa-stumbleupon"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-trello"><i class="fa fa-trello"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-tumblr"><i class="fa fa-tumblr"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-twitch"><i class="fa fa-twitch"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-vimeo"><i class="fa fa-vimeo-square"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-vine"><i class="fa fa-vine"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-vk"><i class="fa fa-vk"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-wechat"><i class="fa fa-wechat"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-wordpress"><i class="fa fa-wordpress"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-xing"><i class="fa fa-xing"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-yahoo"><i class="fa fa-yahoo"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-yelp"><i class="fa fa-yelp"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-youtube"><i class="fa fa-youtube"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-email"><i class="fa fa-envelope"></i></a>
                <hr></div><br>

                <div class="col-md-12 sixth-button mt-5">
                    <a href="#" target="_blank" class="btn-social btn-behance2"><i class="fa fa-behance"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-bitbucket2"><i class="fa fa-bitbucket"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-codepen2"><i class="fa fa-codepen"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-deviantart2"><i class="fa fa-deviantart"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-digg2"><i class="fa fa-digg"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-dribbble2"><i class="fa fa-dribbble"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-dropbox2"><i class="fa fa-dropbox"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-facebook2"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-flickr2"><i class="fa fa-flickr"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-foursquare2"><i class="fa fa-foursquare"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-github2"><i class="fa fa-github-alt"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-google-plus2"><i class="fa fa-google-plus"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-instagram2"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-jsfiddle2"><i class="fa fa-jsfiddle"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-lastfm2"><i class="fa fa-lastfm"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-linkedin2"><i class="fa fa-linkedin"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-paypal2"><i class="fa fa-paypal"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-pinterest2"><i class="fa fa-pinterest"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-reddit2"><i class="fa fa-reddit"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-skype2"><i class="fa fa-skype"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-soundcloud2"><i class="fa fa-soundcloud"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-stack-overflow2"><i class="fa fa-stack-overflow"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-steam2"><i class="fa fa-steam"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-stumbleupon2"><i class="fa fa-stumbleupon"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-trello2"><i class="fa fa-trello"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-tumblr2"><i class="fa fa-tumblr"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-twitch2"><i class="fa fa-twitch"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-twitter2"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-vimeo2"><i class="fa fa-vimeo-square"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-vine2"><i class="fa fa-vine"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-vk2"><i class="fa fa-vk"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-wechat2"><i class="fa fa-wechat"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-wordpress2"><i class="fa fa-wordpress"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-xing2"><i class="fa fa-xing"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-yahoo2"><i class="fa fa-yahoo"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-yelp2"><i class="fa fa-yelp"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-youtube2"><i class="fa fa-youtube"></i></a>
                    <a href="#" target="_blank" class="btn-social btn-email2"><i class="fa fa-envelope"></i></a>
                <hr></div><br>

                <div class="col-md-12 seventh-button mt-5">
                      <a class="btn btn-boxs btn-1">Hover me</a>
                      <a class="btn btn-boxs btn-2">Hover me</a>
                      <a class="btn btn-boxs btn-3">Hover me</a>
                      <a class="btn btn-boxs btn-4">Hover me</a>
                      <a class="btn btn-boxs btn-5">Hover me</a>
                <hr></div><br>

                <div class="col-md-12 eigth-button mt-5">
                    <a href="https://twitter.com/Dave_Conner" class="btn btn-21">Hover</a>
                    <a href="https://twitter.com/Dave_Conner" class="btn btn-22">Hover</a>
                    <a href="https://twitter.com/Dave_Conner" class="btn btn-23">Hover</a>
                </div><br>

                <div class="col-md-12 ninth-button mt-5">
                    <a href="#" class="btn red"><span class="btn-lg">button</span></a>
                    <a href="#" class="btn blue"><span class="btn-lg">button</span></a>
                    <a href="#" class="btn green"><span class="btn-lg">button</span></a>
                    <a href="#" class="btn orange"><span class="btn-lg">button</span></a>
                </div><br>

                <div class="col-md-12 tenth-button mt-5">
                    <a href="#" class="btn btn-lg red">button</a>
                    <a href="#" class="btn btn-lg green">button</a>
                    <a href="#" class="btn btn-lg orange">button</a>
                    <a href="#" class="btn btn-lg blue">button</a>
                </div><br>

            </div>

        </div>
    </div>


@endsection
