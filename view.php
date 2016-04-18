<?php 
$page_title = "View My Album Collection";

include("include/header.php");
?>

    
     <div class="container">
     
        <h1>View My Record Collection</h1>
  
      <!--*********************************************************************
        MAIN FORM:
        Search option
        
        Still to complete
            -- Complete POST action to search after user enters data and selects "Search"
    **********************************************************************-->
         
       <form class="form-inline" action="view.php" method="post">
          <div class="form-group">
            <label for="search">Search All Albums:</label>
            <input type="text" class="form-control" id="search">
            <button type="button" class="btn btn-primary">Search</button>
          </div>
      </form>
	
    
    <!--*********************************************************************
    MAIN TABLE:
    Table shows all listed 
    
    Still to complete
    	-- Needs filter option, to allow user to filter by Album Artist, and SOng
        -- Incorporate code to allow favorites. Star icons are included as examples to how start can incorpotate into favorite function
    **********************************************************************-->
    <table class="table">
    	<thead>
             <tr><th>Albums</th>
     			 <th>Artist</th>
            	<th>Track #</th>    
            	<th>Song Name</th></tr>                     
        </thead>
        <tbody>
        	<tr>
            	<td><i class="fa fa-star-o" aria-hidden="true"></i>Wilder Minds</td> 
	        	<td><i class="fa fa-star-o" aria-hidden="true"></i>Mumford and Sons</td> 
    	    	<td>1</td>
        		<td><i class="fa fa-star-o" aria-hidden="true"></i>Tompkins Square Park</td>
            </tr>     
        	<tr>
            	<td>Wilder Minds</td> 
	        	<td>Mumford and Sons</td> 
    	    	<td>2</td>
        		<td>Believe</td>
            </tr>
        	<tr>
            	<td>Wilder Minds</td> 
	        	<td>Mumford and Sons</td> 
    	    	<td>3</td>
        		<td>The Wolf</td>
            </tr>                                                                                      
        </tbody>
  </table>

</div>
</body>
</html>