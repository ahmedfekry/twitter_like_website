 <!-- BEGIN Main Content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-">
            <div class="box-title">
                <h3><i class="fa fa-twitter"></i> Tweets</h3>
            </div>
            <div class="box-content">
                <!-- BEGIN Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane  active" id="search-advance">
                        @foreach($tweets as $tweet)
                            <div class="post">
                              <div class="user-block" style="margin-bottom: 2%;">
                                <img class="img-circle img-bordered-sm" src="img/demo/80x80.gif" alt="user image">
                                    <span class="username">
                                      <a href="{{url('/'.$tweet->user->username)}}">{{$tweet->user->username}}</a>
                                      @if(Auth::user()->id == $tweet->user_id)
                                        <a href="{{url('tweet/'.$tweet->id.'/delete')}}" onclick="return confirm('Are you sure?')" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                      @endif
                                    </span>
                              </div>
                              <!-- /.user-block -->
                              <p style="margin-left: 2%;">{{$tweet->text}}</p>
                              <ul class="list-inline">
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                </li>
                                <li class="pull-right">
                                  <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> likes(5)</a>
                                </li>
                              </ul>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- END Main Content -->