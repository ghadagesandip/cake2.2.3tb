 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      
          
      google.setOnLoadCallback(drawChart1);
      
      function drawChart1(){
		
      	  var jsonData = $.ajax({
					type : "GET",
					url  :"<?php echo $this->Html->url(array('controller'=>'colleges','action'=>'getCollegeDataAjax')); ?>" ,
					dataType:"json",
					async: false
				}).responseText;

		// console.log(jsonData);

		 var dataArr = $.parseJSON(jsonData);
		 
		 if(dataArr['total']==0){
			
			document.getElementById('chart_div').innerHTML = "No data";
         }else{
        	
          data = new google.visualization.DataTable(dataArr['pie_chart']);
			var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
			chart.draw(data, {width: 400, height: 300});
         
         }
		
	  }
	  
    </script>
    
     <div id="chart_div" style="width: 400px; height: 500px;"></div>
    

