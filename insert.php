<?php 
$page_title = "Insert Album";

include("include/header.php");
?>

    
     <div class="container">
     
        <h1>Insert New Album</h1>


      <!--*********************************************************************
        MAIN FORM:
        Inserting Record
        
        Still to complete
            -- After "Insert Track" is pressed, using Javascript, new rows can be added to table using "Numb of Tracks" entered by user
            -- After "Save This Record" is pressed, Record will be saved along with Tracks entered
    **********************************************************************-->
           
	<div style="width:50%">
    <form class="form-horizontal" action="insert.php" method="post">
        <div class="form-group">
            <label for="albumName" class="col-sm-3 control-label">Album Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="albumName" placeholder="Album Name">
            </div>
        </div>
    
        <div class="form-group">
            <label for="artist" class="col-sm-3 control-label">Artist:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="artist" placeholder="Artist">
            </div>
        </div>
 
         <div class="form-group">
            <label for="trackNum" class="col-sm-3 control-label">Num of Tracks:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="trackNum" placeholder="0">
            </div>
        </div>
           
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm9">
                <button type="submit" class="btn btn-default">Insert Tracks</button>
            </div>
        </div>
	
     
    
    <table class="table" style="width:70%;">
    	<thead>
             <tr>
             	<th>Track #</th>    
            	<th>Song Name</th></tr>                     
        </thead>
        <tbody>
        	<tr>
        		<td>1</td>
	        	<td><input type="text" class="form-control" id="songName_1"> </td>
            </tr>   
        	<tr>
        		<td>2</td>
	        	<td><input type="text" class="form-control" id="songName_2"> </td>
            </tr>  
        	<tr>
        		<td>3</td>
	        	<td><input type="text" class="form-control" id="songName_3"> </td>
            </tr>                                                                                          
        </tbody>
  </table>
 <button type="button" class="btn btn-primary">Save This Record</button>   
</form>

</div>
</body>
</html>