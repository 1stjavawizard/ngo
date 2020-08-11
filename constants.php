<?php 
    
    $up_action= isset($_GET['page'])? $_GET['page']:'';
    ?>
<?php if($up_action =="event"){ ?>


<div class="row">
                <div class="col-lg-12">
		<div class="text-center m-t-lg">
                        <h1 style="font-size:1rem">
                            Welcome to divine destiny dashboard. Please upload event picture.
                        </h1>
                        
                    </div>
		</div>
		</div>

<div class="panel panel-body">
    <form action="upload?action=event" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="event_title"> Event Title</label>
    <input type="text" name="event_title" placeholder="Event Title" class="form-control" id="event_title"/>
    </div>
    <div class="form-group">
        <label for="event_city"> Event City</label>
     <input type="text" name="event_city" placeholder="Event City" class="form-control" id="event_city"/>
   </div><br>
   <div class="form-group">
       <label for="event_date"> Event Date</label>
    <input type="date" min="2020-07-31" name="event_date" placeholder="Event Date" class="form-control" id="event_date"/>
    </div>
    
    <div class="form-group">
       <label for="event_date"> Event Start Time</label>
    <input type="time"  name="event_start_time" placeholder="event time" class="form-control" id="event_start_time"/>
    </div>
    
     <div class="form-group">
       <label for="event_date"> Event End Time</label>
    <input type="time"  name="event_end_time" placeholder="event time" class="form-control" id="event_end_time"/>
    </div>
    
    <div class="form-group">
         <label for="event_message"> Event Message</label>
    <textarea name="event_message" cols="10" rows="4" placeholder="Event Message" class="form-control" id="event_message"></textarea>
    </div>
    
    <div class="form-group">
    <label for="image_name"> Event Picture</label>
    <input type="file" name="image_name" id="image_name" class="first" accepted="image/*"/>
    </div>
     <div class="form-group">
    
    <input type="submit" name="event_submit" id="image_name" class="btn btn-sm btn-danger" value="Submit"/>
    </div>
    
</form> 
    
</div>


<?php } elseif($up_action =="letter"){?>

<div class="row">
                <div class="col-lg-12">
		<div class="text-center m-t-lg">
                        <h1>
                            Welcome to divine destiny dashboard. 
                        </h1>
                        
                    </div>
		</div>
		</div>



<?php }?>