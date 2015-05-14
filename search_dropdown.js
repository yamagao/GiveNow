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
                        var content2add = tempArray[j].replace("<li>", "<li style='list-style-type: none;'>");  
                      	htmlValue += content2add.replace("<ul>", "");
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
  	var htmlValue = "";
  	if(selectElement.id === "research"){
      	if(selectElement.selectedIndex > 3 && selectElement.selectedIndex < 7){
          	htmlValue += selectElement.getElementsByTagName("option")[3].getAttribute("value");
      	}
      	if(selectElement.selectedIndex > 7 && selectElement.selectedIndex < 12){
          	htmlValue += selectElement.getElementsByTagName("option")[7].getAttribute("value");
      	}
      	if(selectElement.selectedIndex > 12){
          	htmlValue += selectElement.getElementsByTagName("option")[12].getAttribute("value");
      	}
  	}
  	htmlValue += selectElement.getElementsByTagName("option")[selectElement.selectedIndex].getAttribute("value"); 	
  	if(htmlValue === "0"){
      	listElement.innerHTML = "";
      	return;
  	}
	var selectArray = document.getElementsByTagName("select");
	for (i = 0; i < selectArray.length; i++) {
		if(selectArray[i] === selectElement)
			continue;
		selectArray[i].selectedIndex = 0;
		selectArray[i].parentNode.nextElementSibling.innerHTML = "";
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