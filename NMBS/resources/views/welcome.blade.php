@extends('layout.layout')

@section('content')
    
    <section class="jumbotron" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1>Welkom bij NMBS <img src="{{{ asset('/logo-nmbs.png') }}}" ></h1>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <p><a class="btn btn-primary" target="_blank" href="http://www.belgianrail.be/jp/sncb-nmbs-routeplanner/help.exe/nn?tpl=rss_feed&">Storingen op het net</a></p>
                </div>
            </div>
        </div>
    </section>


@endsection