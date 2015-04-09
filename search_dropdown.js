$( "#funds" ).keyup(function() {
  	if($(this).val() === ""){
      	document.getElementById("funds_list").innerHTML = "";
      	return;
  	}
  	var fundsArray = document.getElementsByTagName("option");
  	var htmlValue = "";
	var tempArray;
  	for (i = 0; i < fundsArray.length; i++) { 
      	if(fundsArray[i].getAttribute("value") === "0"){
          	continue;
       	}
      	//if(fundsArray[i].textContent.toLowerCase().indexOf($('#funds').val().toLowerCase()) !== -1){
      	if(fundsArray[i].value.toLowerCase().indexOf($('#funds').val().toLowerCase()) !== -1){
            if(fundsArray[i].value.indexOf('</li>') !== -1){
                tempArray = fundsArray[i].value.split('</li>');
                for(j = 0; j < tempArray.length; j++) { 
                    if(tempArray[j].toLowerCase().indexOf($('#funds').val().toLowerCase()) !== -1){
                        htmlValue += tempArray[j];
                    }
                }
            }
            else{
                htmlValue += fundsArray[i].getAttribute("value");
            }
      	}
    }
  	document.getElementById("funds_list").innerHTML = htmlValue;
});

function dropdownList(selectElement, listElement){
  	listElement.innerHTML = "";
  	var htmlValue = selectElement.getElementsByTagName("option")[selectElement.selectedIndex].getAttribute("value");
  	
  	if(htmlValue === "0"){
      	listElement.innerHTML = "";
      	return;
  	}
  	listElement.innerHTML = htmlValue;
}
$("#greatest_need").change(function(){	
  	dropdownList(document.getElementById("greatest_need"), document.getElementById("greatest_need_list"));
});
$("#education").change(function(){	
  	dropdownList(document.getElementById("education"), document.getElementById("education_list"));
});
$("#research").change(function(){	
  	dropdownList(document.getElementById("research"), document.getElementById("research_list"));
});
$("#extension").change(function(){	
  	dropdownList(document.getElementById("extension"), document.getElementById("extension_list"));
});
$("#other").change(function(){	
  	dropdownList(document.getElementById("other"), document.getElementById("other_list"));
});