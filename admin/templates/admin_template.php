<!-- Cards-->
<div class="row">
  <div class="col-sm-4">
    <div class="panel panel-info">
      <div class="panel-heading"> 
        Announcements
      </div>
      <ol class="panel-body" style="margin: 0 1%;">
        <li>Announcement 1</li>
        <li>Announcement 2</li>
        <li>Announcement 3</li>
      </ol>
      <div class="panel-footer">
        <a class="" href="#">View More</a>
      </div>
      
    </div>
  </div>

  <div class="col-sm-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        Requests Sent By Users
      </div>
      <ol class="panel-body" style="margin: 0 1%;">
        <li> Request 1</li>
        <li> Request 2</li>
        <li> Request 3</li>
      </ol>
      <div class="panel-footer"panel-footer"">
        <a href="#">View More</a>
      </div>
      
    </div>
  </div>

  <div class="col-sm-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        Events
      </div>
      <ol class="panel-body" style="margin: 0 1%;">
        <li> Event 1</li>
        <li> Event 2</li>
        <li> Event 3</li>
      </ol>
      <div class="panel-footer"panel-footer"">
        <a href="#">View More</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
     <div class="panel panel-info">
      <div class="panel-heading">
        Students Time Table
      </div>
      <div class="panel-body" style="margin: 0 1%;">
        <?php 
          $table->setHeading(['Day','9-10','10-11', '11-12', '12-1', '1-2', '2-3', '3-4', '4-5']);
          $table->setRow(['MONDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['TUESDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['WEDNESDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['THURSDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['FRIDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->generateHTML();
        ?>
      </div>
      <div class="panel-footer"panel-footer"">
        <a href="#">View Other Time Tables</a>
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>