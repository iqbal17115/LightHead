@extends('layouts.ecommerce')
@section('content')
<style>
    .shadow {
        background-color: rgb(226, 222, 220);
        box-shadow: 4px 4px 4px 4px;
    }

    .methodNamePosition {
        position: relative;
    }

    .methodName {
        position: absolute;
        top: 50%;
        left: 10%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 20px;
    }

    .second-method {
        font-size: 20px;
        margin-top: 20px;
    }

    .center {
        display: flex;
        justify-content: center;
    }

    .page-header {
        padding-bottom: 3px;
        margin: -31px 0 20px;
        border-bottom: 1px solid #eee;
    }
</style>
<main class="main about">
    <div class="page-header page-header-bg text-left">
        <body>
            <section class="container">
              <div class="card-container">
                <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="a brand new sports car" />
                </div>
                <div class="card-body">
                  <span class="card-badge card-badge-blue">Car design</span>
                  <h1>
                    Why is the sports cars so well designed?
                  </h1>
                  <p class="card-subtitle">
                    An exploration into the car design industry and how it works
                  </p>
                  <div class="card-author">
                    <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="author avatar" />
                    <div class="author-info">
                      <p class="author-name">John Doe</p>
                      <p class="post-timestamp">2h ago</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-container">
                <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1504728078670-d0a59873c8c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="a landscape view full of baloons" />
                </div>
                <div class="card-body">
                  <span class="card-badge card-badge-purple">Adventure</span>
                  <h1>
                    Discover new adventures over the world
                  </h1>
                  <p class="card-subtitle">
                    Adventure and baloons are trends these days
                  </p>
                  <div class="card-author">
                    <img src="https://images.unsplash.com/photo-1504728078670-d0a59873c8c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="author avatar" />
                    <div class="author-info">
                      <p class="author-name">John Doe</p>
                      <p class="post-timestamp">2h ago</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-container">
                <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1506422748879-887454f9cdff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="a city full of buildings" />
                </div>
                <div class="card-body">
                  <span class="card-badge card-badge-pink">Engineering</span>
                  <h1>
                    Living in downtown in the biggest cities
                  </h1>
                  <p class="card-subtitle">
                    Citizens of the biggest cities in the world talk about their lives
                  </p>
                  <div class="card-author">
                    <img src="https://images.unsplash.com/photo-1506422748879-887454f9cdff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="author avatar" />
                    <div class="author-info">
                      <p>John Doe</p>
                      <p>2h ago</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </body>
        </html>
    </div>
</main>
@endsection
