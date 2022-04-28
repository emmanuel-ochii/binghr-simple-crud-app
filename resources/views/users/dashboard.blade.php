@extends('users.layout.user_layout')

@section('content')
    <!-- Dashboard -->
    <div class="personal-dashboard personal-dashboard-v2">

        <div class="columns is-multiline">

            <div class="column is-12">
                <div class="dashboard-header">
                    <div class="h-avatar is-xl">
                        <img class="avatar" src="https://via.placeholder.com/150x150"
                            data-demo-src="{{ asset('/img/avatars/photos/8.jpg') }}" alt="">
                    </div>
                    <div class="user-meta is-dark-bordered-12">
                        <h3 class="title is-4 is-narrow is-bold">Welcome back, BingHr </h3>
                        <p class="light-text">It's really nice to see you again</p>
                    </div>
                    <div class="user-action">
                        <h3 class="title is-2 is-narrow">3</h3>
                        <p class="light-text">New users are pending review</p>
                        <a class="action-link">View users</a>
                    </div>
                    <div class="cta h-hidden-tablet-p">
                        <div class="media-flex inverted-text">
                            <i class="lnil lnil-crown-alt-1"></i>
                            <p class="white-text">Start using our team and HR management tools</p>
                        </div>
                        <a class="link inverted-text">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
