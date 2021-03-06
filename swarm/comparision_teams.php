<!DOCTYPE html>
<html lang="en">
   <?php include 'header.php';?>
   <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
   <style type="text/css">
      * {
      box-sizing: border-box;
      }
      body {
      font: 16px Arial;  
      }
      .autocomplete {
      /*the container must be positioned relative:*/
      position: relative;
      display: inline-block;
      }
      input {
      border: 1px solid transparent;
      background-color: #f1f1f1;
      padding: 10px;
      font-size: 16px;
      }
      input[type=text] {
      background-color: #f1f1f1;
      width: 100%;
      }
      input[type=submit] {
      background-color: DodgerBlue;
      color: #fff;
      cursor: pointer;
      }
      .autocomplete-items {
      position: absolute;
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      /*position the autocomplete items to be the same width as the container:*/
      top: 100%;
      left: 0;
      right: 0;
      }
      .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: #fff; 
      border-bottom: 1px solid #d4d4d4; 
      }
      .autocomplete-items div:hover {
      /*when hovering an item:*/
      background-color: #e9e9e9; 
      }
      .autocomplete-active {
      /*when navigating through the items using the arrow keys:*/
      background-color: DodgerBlue !important; 
      color: #ffffff; 
      }
  #container {
  min-width: 310px;
  max-width: 100%;
  height: 400px;
  margin: 0 auto
}
      .playerOne {
      float: left;
      }
      .playerTwo {
      float: right;
      }
	  
	  
	  .loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
	margin: 10px auto;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
	  
	  
   </style>
   <!-- http://doc.jsfiddle.net/use/hacks.html#css-panel-hack -->
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <style>
   </style>
   <body class="fix-header fix-sidebar">
      <div id="main-wrapper">
         <!-- header header  -->
         <div class="header">
            <?php include 'nav.php';?>
         </div>
         <!-- End header header -->
         <?php include 'leftside.php';?>
         <!-- Page wrapper  -->
         <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
               <div class="col-md-5 align-self-center">
                  <h3 class="text-primary">Compare</h3>
               </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Compare</li>
                        <li class="breadcrumb-item active">Comparision</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
               <!-- Start Page Content -->
               <div class="row">
				<!--<button onclick="getDataFromServer('Drugs!');">Test</button>-->
                  <div class="col-md-12">
                     <div class="playerOne">
                        <span class="input-group-btn"><button onclick="copyToClipboardProblem();" class="btn btn-primary" type="submit"><i class="ti-search"></i></button></span>
                        <div class="autocomplete">
                           <input id="myInput" type="text" name="myProblem" placeholder="Search Problem">
                        </div>
                     </div>
                  </div>
               </div>
       
               <hr />
               <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                  <!--<button id="update">Test</button>-->
                  <!-- column -->
                  <div class="col-lg-12">
					<div id="container"> <div class="loader"></div> </div>
                  </div>
                  <!-- column -->
               </div>
               
			                  <hr />
                
				
				
				<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Team Interaction A</h4>
                            </div>
						<iframe id="TeamA" frameborder="0" scrolling="yes" width="100%" height="512" > </iframe>   
                
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Team Interaction B</h4>
                            </div>
                    <iframe id="TeamB" frameborder="0" scrolling="yes" width="100%" height="512" > </iframe>  
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
			   
			   
			  <hr />
			  
			  
              
			  
				<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>User Profile A</h4>
                            </div>
						<iframe id="UserA" frameborder="0" scrolling="yes" width="100%" height="512" > </iframe>   
                
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>User Profile B</h4>
                            </div>
                    <iframe id="UserB" frameborder="0" scrolling="yes" width="100%" height="512"  > </iframe>  
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
			   
			   
			   <!-- End PAge Content -->
			   
			   <button style="display: none;" type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-right">Success</button>
			   
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php include 'footer.php';?>
            <!-- End footer -->
         </div>
         <!-- End Page wrapper  -->
      </div>
      <?php include 'footerScripts.php';?>
      <script src="code/highcharts.js"></script>
      <script src="code/map.js"></script>
      <script src="https://code.highcharts.com/modules/data.js"></script>
	     <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="js/lib/toastr/toastr.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/toastr/toastr.init.js"></script>
      <script>
	  
	  var globalProblemParent = "How Did Arthur Allen Die?";
	  var trackTeam = 1;
	  
	  
         function autocomplete(inp, arr) {
           /*the autocomplete function takes two arguments,
           the text field element and an array of possible autocompleted values:*/
           var currentFocus;
           /*execute a function when someone writes in the text field:*/
           inp.addEventListener("input", function(e) {
               var a, b, i, val = this.value;
               /*close any already open lists of autocompleted values*/
               closeAllLists();
               if (!val) { return false;}
               currentFocus = -1;
               /*create a DIV element that will contain the items (values):*/
               a = document.createElement("DIV");
               a.setAttribute("id", this.id + "autocomplete-list");
               a.setAttribute("class", "autocomplete-items");
               /*append the DIV element as a child of the autocomplete container:*/
               this.parentNode.appendChild(a);
               /*for each item in the array...*/
               for (i = 0; i < arr.length; i++) {
                 /*check if the item starts with the same letters as the text field value:*/
                 if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                   /*create a DIV element for each matching element:*/
                   b = document.createElement("DIV");
                   /*make the matching letters bold:*/
                   b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                   b.innerHTML += arr[i].substr(val.length);
                   /*insert a input field that will hold the current array item's value:*/
                   b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                   /*execute a function when someone clicks on the item value (DIV element):*/
                   b.addEventListener("click", function(e) {
                       /*insert the value for the autocomplete text field:*/
                       inp.value = this.getElementsByTagName("input")[0].value;
         			   getDataFromServer(inp.value);
					   //setTimeout();
					   //setTimeout(getDataFromServer(inp.value), 5000);
					   
					   var problemName = $("#myInput").val();
					   globalProblemParent = $("#myInput").val();
					   
					   var uri = baseUrl+"/tags_questions_A.php?problem="+problemName+"&team=null";
					   var res = encodeURI(uri);
					   $('#TeamA').attr('src', uri); 
					   $('#TeamB').attr('src', uri); 
					   
					   uri = baseUrl+"/compare_user_profile_details.php?problem="+problemName;
					   res = encodeURI(uri);
					   $('#UserA').attr('src', res); 
					   $('#UserB').attr('src', res); 
					   
					   console.log(inp.value);
                       /*close the list of autocompleted values,
                       (or any other open lists of autocompleted values:*/
                       closeAllLists();
                   });
                   a.appendChild(b);
                 }
               }
           });
           /*execute a function presses a key on the keyboard:*/
           inp.addEventListener("keydown", function(e) {
               var x = document.getElementById(this.id + "autocomplete-list");
               if (x) x = x.getElementsByTagName("div");
               if (e.keyCode == 40) {
                 /*If the arrow DOWN key is pressed,
                 increase the currentFocus variable:*/
                 currentFocus++;
                 /*and and make the current item more visible:*/
                 addActive(x);
               } else if (e.keyCode == 38) { //up
                 /*If the arrow UP key is pressed,
                 decrease the currentFocus variable:*/
                 currentFocus--;
                 /*and and make the current item more visible:*/
                 addActive(x);
               } else if (e.keyCode == 13) {
                 /*If the ENTER key is pressed, prevent the form from being submitted,*/
                 e.preventDefault();
                 if (currentFocus > -1) {
                   /*and simulate a click on the "active" item:*/
                   if (x) x[currentFocus].click();
                 }
               }
           });
           function addActive(x) {
             /*a function to classify an item as "active":*/
             if (!x) return false;
             /*start by removing the "active" class on all items:*/
             removeActive(x);
             if (currentFocus >= x.length) currentFocus = 0;
             if (currentFocus < 0) currentFocus = (x.length - 1);
             /*add class "autocomplete-active":*/
             x[currentFocus].classList.add("autocomplete-active");
           }
           function removeActive(x) {
             /*a function to remove the "active" class from all autocomplete items:*/
             for (var i = 0; i < x.length; i++) {
               x[i].classList.remove("autocomplete-active");
             }
           }
           function closeAllLists(elmnt) {
             /*close all autocomplete lists in the document,
             except the one passed as an argument:*/
             var x = document.getElementsByClassName("autocomplete-items");
             for (var i = 0; i < x.length; i++) {
               if (elmnt != x[i] && elmnt != inp) {
                 x[i].parentNode.removeChild(x[i]);
               }
             }
           }
           
         }
         
         var getUrl = window.location;
		 var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
		 
         window.onload = function() {
			 

		
         $('.col-lg-12').width();
         	console.log("Initiating: "+baseUrl);
            var dataString = 'test';
            $.ajax({
                type:'POST',
                data:dataString,
                url:'get_questions.php',
         	   dataType: 'json',
                success:function(data) {
         		//console.log(data);
         		var questions=[];
		
				for (var i = 0; i < data.length; i++) {
					questions[i]=data[i];
				}
				autocomplete(document.getElementById("myInput"), questions);
				}
         	});
			
			//getDataFromServer("Drug Interdiction");
			
			var uri = baseUrl+"/tags_questions_A.php?problem=How Did Arthur Allen Die?"+"&team=null";
			  $('#TeamA').attr('src', uri); 
			  $('#TeamB').attr('src', uri); 
			  
			 var uri2 = baseUrl+"/compare_user_profile_details.php?problem=How Did Arthur Allen Die?";
			   res = encodeURI(uri2);
			   $('#UserA').attr('src', res); 
			   $('#UserB').attr('src', res); 
         	
         };
         
	

$(function(){

    $("#dmenue").on('click', 'li a', function(){
      $("#dbutton:first-child").text($(this).text());
      $("#dbutton:first-child").val($(this).text());
   });

});
		 
function getDataFromServer(problem)
{
	   console.log("problem: "+problem);
	   
		
	
	   var dataString = 'problem='+problem;
	   
	   $.ajax({
        type:'POST',
        data:dataString,
		dataType: 'json',
        url:'get_problem_profile.php',
        success:function(data) {
			console.log(data);			
			//console.log("JSON from server: "+data);
			displayData(data);
			}
		});

}	
		 
function displayData(data)
 {
	var chart = $('#container').highcharts();
	
	if(chart)
	{
		chart.destroy();
	}

Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Problem Profile'
  },
  subtitle: {
    text: 'Source: Swarm'
  },
  xAxis: {
    categories: data.teams,
    crosshair: true
  },
  yAxis: {
    min: 0,
	max:100,
    title: {
      text: 'Rating'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b> {point.y}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0,
	  events: {
		click: function () {
			//testObject=this;
		   var uri = baseUrl+"/tags_questions_A.php?problem="+globalProblemParent+"&team="+event.point.category;
		   var res = encodeURI(uri);
		   
		   if(trackTeam%2==0)
		   {
			   $('#TeamB').attr('src', uri); 
		   }
		   else
		   {
			  $('#TeamA').attr('src', uri);   
		   }
		   
		   trackTeam = trackTeam+1;
		   
			copyToClipboard(event.point.category);
			console.log('Category: ' + event.point.category);
		}
	 }
    }
  },
  series: [{
    name: 'Internal Rating',
    data: data.teamrating

  }, {
    name: 'External Rating',
    data: data.onplatform

  }]
});	

}
		
		
		function copyToClipboard(text) {
    //window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
	  var $temp = $("<input>");
	  $("body").append($temp);
	  $temp.val(""+text+"").select();
	  document.execCommand("copy");
	  $temp.remove();
	  $( "#toastr-success-top-right" ).trigger( "click" );
  }
  
  function copyToClipboardProblem() {
	
    //window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
	  var $temp = $("<input>");
	  $("body").append($temp);
	  $temp.val($("#myInput").val()).select();
	  document.execCommand("copy");
	  $temp.remove();
	  $( "#toastr-success-top-right" ).trigger( "click" );
  }
  
   setTimeout(function(){
      //deferred onload
	  $(".loader").hide();
	  getDataFromServer("How Did Arthur Allen Die?");
    }, 3000);
	
		 
         
      </script>
   </body>
</html>