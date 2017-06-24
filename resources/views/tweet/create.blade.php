<div class="col-md-12">
    <div class="box">
        <div class="box-title">
            <h3><i class="fa fa-puzzle-piece"></i>Create Tweet</h3>
            <div class="box-tool">
                <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
           <div class="container">
               <form class="form-horizontal col-md-12" method="post" action="{{url('tweet')}}" id="submitTweet">

                   <div class="form-group">
                       <textarea maxlength="140" name="Tweet" placeholder="What is on your mind ?" class="form-control" required></textarea>
                   </div>
                   <div class="form-group last">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-5">
                           <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Tweet</button>
                        </div>
                    </div>
               </form>
           </div>
        </div>
    </div>
</div>