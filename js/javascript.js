$(document).ready(function(){
    
     $("#dropdownicon").click(function(){
            
        $(".dropdown").fadeToggle();
    

        if ($(this).text() == "\u2630") {
                $(this).html("\u2715"); 
            } else {
                $(this).html("\u2630");
            }
    });

// Animation for Guides 
$(function(){
		// All jQuery code goes here
        $("#hank").hover(function(){
            $("ul#guideInfo3").addClass("open");
        }, function(){
        
            $("ul#guideInfo3").removeClass("open");
        
        });
	})

$(function(){
		// All jQuery code goes here
        $("#tyler").hover(function(){
            $("ul#guideInfo2").addClass("open");
        }, function(){
        
            $("ul#guideInfo2").removeClass("open");
        
        });
	})

$(function(){
		// All jQuery code goes here
        $("#john").hover(function(){
            $("ul#guideInfo1").addClass("open");
        }, function(){
        
            $("ul#guideInfo1").removeClass("open");
        
        });
	})

var weatherObject = new XMLHttpRequest();
    
weatherObject.open('GET', 'http://api.wunderground.com/api/c6759e284ce1e98e/conditions/q/ID/Riggins.json', true);
    
weatherObject.send();
    
weatherObject.onload = function(){
    var weatherInfo = JSON.parse(weatherObject.responseText);
    console.log(weatherInfo);
    
    document.getElementById('temp').innerHTML = weatherInfo.current_observation.temp_f;
}
})