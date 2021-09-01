<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <title>Chat Project</title>
  </head>
  <body>
    <section class="container-fluid dashboard-1">
        <div class="row main-dashboard">
            <div class="col-md-1 menu-v pl-0 pr-0">
                <a href="" class="logo"><img src="{{ url('img/logo.png') }}" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3 chat-list pl-0 pr-0">
                <h1>Chat</h1>
                <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
                    <li class="nav-item flex-grow-1">
                        <a class="nav-link active" id="conversation-tab" data-toggle="tab" href="#conversation" role="tab" aria-controls="conversation" aria-selected="true">Conversation</a>
                    </li>
                    <li class="nav-item flex-grow-1">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contac" aria-selected="false">Contacts</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="conversation" role="tabpanel" aria-labelledby="conversation-tab">
                        <div class="search">
                            <img src="{{ url('img/loupe.svg') }}" alt="">
                            <input type="text" name="search" placeholder="Search Conversation">
                        </div>
                        <div class="chats">
                            <div class="content-chat">
                                <div class="chat-mini d-flex align-items-start active">
                                    <img src="{{ url('img/profile.svg') }}" alt="">
                                    <div class="info-chat flex-grow-1">
                                        <h4>Carleton Stehr</h4>
                                        <p>Persipiciatis Unde Omnis Iste...</p>
                                        <div class="hour">
                                            <p>12:45</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-mini d-flex align-items-start">
                                    <img src="{{ url('img/profile.svg') }}" alt="">
                                    <div class="info-chat flex-grow-1">
                                        <h4>Carleton Stehr</h4>
                                        <p class="mb-2">Persipiciatis Unde Omnis Iste...</p>
                                        <div class="tags">
                                            <span class="span-blue">100 User</span>
                                            <span class="span-red">Urgent</span>
                                            <span class="span-customer">Customer</span>
                                        </div>
                                        <div class="hour">
                                            <p>12:45</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-mini d-flex align-items-start">
                                    <img src="{{ url('img/profile.svg') }}" alt="">
                                    <div class="info-chat flex-grow-1">
                                        <h4>Carleton Stehr</h4>
                                        <p class="mb-2">Persipiciatis Unde Omnis Iste...</p>
                                        <div class="tags">
                                            <span class="span-blue">100 User</span>
                                            <span class="span-red">Urgent</span>
                                            <span class="span-customer">Customer</span>
                                        </div>
                                        <div class="hour">
                                            <p>12:45</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contac-tab">.ddd</div>
                </div>
            </div>
            <div class="col-md-6 conversation pl-0 pr-0">
                <div class="title-chat d-flex align-items-center">
                    <div class="chat-mini d-flex align-items-start flex-grow-1">
                        <img src="{{ url('img/profile.svg') }}" alt="">
                        <div class="info-chat flex-grow-1">
                            <h4>Carleton Stehr</h4>
                            <div class="tags">
                                <span class="span-blue">100 User</span>
                                <span class="span-red">Urgent</span>
                                <span class="span-customer">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="agents-title">
                        <p class="mb-0"><b>Agent</b></p>
                        <img src="{{ url('img/profile.svg') }}" alt="">
                        <img src="{{ url('img/profile.svg') }}" alt="">
                        <img src="{{ url('img/profile.svg') }}" alt="">
                    </div>
                </div>
                <div class="conversation-content">
                    <div class="form-chat d-flex">
                        <input type="text" class="flex-grow-1" placeholder="Write Here">
                        <a href=""><img src="{{ url('img/happy.svg') }}" alt=""></a>
                        <a href=""><img src="{{ url('img/paper-clip.svg') }}" alt=""></a>
                        <a href="" class="send"><img src="{{ url('img/send.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 pl-0 pr-0">
                <div class="buttons-profile d-flex justify-content-around align-items-center">
                    <button type="button" class="btn btn-success">Check In</button>
                    <button type="button" class="btn btn-danger">Check Out</button>
                </div>
                <div class="profile text-center">
                    <img src="{{ url('img/profile.svg') }}" alt="">
                    <p class="mb-0">Christeen Lee</p>
                    <p class="mb-4"><span><img src="{{ url('img/telephone.svg') }}" alt=""> +1 332 596 9965</span></p>
                    <button type="button" class="btn btn-primary">Open in CRM</button>
                    <button type="button" class="btn btn-info">Add Agent</button>
                    <button type="button" class="btn btn-info">Transfer To Another Agent</button>  
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-6 mb-4 pl-0 pr-0 text-left">
                                Creation Date
                            </div>
                            <div class="col-6 mb-4 pl-0 pr-0 text-right">
                                12.12.2020
                            </div>
                            <div class="col-6 mb-4 pl-0 pr-0 text-left">
                                Amount
                            </div>
                            <div class="col-6 mb-4 pl-0 pr-0 text-right">
                                550
                            </div>
                            <div class="col-6 mb-4 pl-0 pr-0 text-left">
                                Stage
                            </div>
                            <div class="col-6 mb-4 pl-0 pr-0 text-right">
                                Qualification
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>