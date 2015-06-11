<!--Left Column-->
<div id="content-left" class="medium-12 columns">
<t4 type="meta" meta="html_anchor" />
  
<h1><t4 type="content" name="Main Page Heading" output="normal" modifiers="striptags"  /></h1>
<t4 type="content" name="Main Page Body Before Calendar" output="normal" modifiers="medialibrary, nav_sections"  />

<h4>Search Funds</h4>
<form id="search_funds" action="#">
<input type="text" id="funds">
</form>
<ul id="funds_list"></ul>
<h4>Areas of Greatest Need</h4>
<form>
<select id="greatest_need">
  <option selected="selected" value = "0">Please Select</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017147&appealcode=GSG6O">IFAS Florida Excellence Endowment</a></li></ul>'>IFAS Florida Excellence Endowment</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/teaching/">View All College of Agricultural and Life Sciences Giving &nbsp;&rarr;</a></h6></li>
  				   <ul>
  				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017971&appealcode=GSG6O">College of Agricultural and Life Sciences</a></li></ul>'>IFAS Teaching (College of Agricultural and Life Sciences)</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/extension/">View All IFAS Extension Giving &nbsp;&rarr;</a></h6></li>
  				   <ul>
  				   <li><a href="https://www.uff.ufl.edu/onlinegiving/FundDetail.asp?FundCode=003287&appealcode=GSG6O">IFAS Extension</a></li></ul>'>IFAS Extension</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/research/">View All IFAS Research Giving &nbsp;&rarr;</a></h6></li>
  				   <ul>
  				   <li><a href="https://www.uff.ufl.edu/onlinegiving/FundDetail.asp?FundCode=003283&AppealCode=GSG6O">IFAS Research</a></li></ul>'>IFAS Research</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/rec-giving/">View All REC Giving &nbsp;&rarr;</a></h6></li>'>&nbsp;&nbsp;----Research and Education Centers----</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/crec-giving/">View All Citrus REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../crec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['crec-giving']; ?>'>&nbsp;&nbsp;Citrus REC (Lake Alfred)</option>
                     
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/erec-giving/">View All Everglades REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../erec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['erec-giving']; ?>'>&nbsp;&nbsp;Everglades REC (Belle Glade)</option>
                     
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/flrec-giving/">View All Fort Lauderdale REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../flrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['flrec-giving']; ?>'>&nbsp;&nbsp;Fort Lauderdale REC</option>
                     
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/gcrec-giving/">View All Gulf Coast REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../gcrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['gcrec-giving']; ?>'>&nbsp;&nbsp;Gulf Coast REC (Balm)</option>
                     
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/irrec-giving/">View All Indian River REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../irrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['irrec-giving']; ?>'>&nbsp;&nbsp;Indian River REC (Ft. Pierce)</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/mrec-giving/">View All Mid-Florida REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../mrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['mrec-giving']; ?>'>&nbsp;&nbsp;Mid-Florida REC (Apopka)</option>
  
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/nfrec-giving/">View All North Florida REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../nfrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['nfrec-giving']; ?>'>&nbsp;&nbsp;North Florida REC (Marianna, Quincy)</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/rcrec-giving/">View All Range Cattle REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../rcrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['rcrec-giving']; ?>'>&nbsp;&nbsp;Range Cattle REC (Ona)</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/swfrec-giving/">View All Southwest Florida REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../swfrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['swfrec-giving']; ?>'>&nbsp;&nbsp;Southwest Florida REC (Immokalee)</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/trec-giving/">View All Tropical REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../trec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['trec-giving']; ?>'>&nbsp;&nbsp;Tropical REC (Homestead)</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/wfrec-giving/">View All West Florida REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../wfrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['wfrec-giving']; ?>'>&nbsp;&nbsp;West Florida REC (Milton)</option>
</select>
</form>
<ul id="greatest_need_list"></ul>

<h4>Education</h4>
<form>
<select id="education">
  <option selected="selected" value = "0">Please Select</option>	 
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/cals-giving/">View All CALS Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../cals-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['cals-giving']; ?>'>College of Ag and Life Sciences</option>

  <option value = '' disabled>&nbsp;&nbsp;----Academic Departments----</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/agricultural-education-and-communication-giving/">View All Agricultural Education and Communication Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../agricultural-education-and-communication-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['agricultural-education-and-communication-giving']; ?>'>&nbsp;&nbsp;Agricultural Education and Communication Dept.</option>
 
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/agricultural-and-biological-engineering-giving/">View All Agricultural and Biological Engineering Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../agricultural-and-biological-engineering-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['agricultural-and-biological-engineering-giving']; ?>'>&nbsp;&nbsp;Agricultural and Biological Engineering Dept.</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/agronomy-giving/">View All Agronomy Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../agronomy-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['agronomy-giving']; ?>'>&nbsp;&nbsp;Agronomy Dept.</option>
	
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/animal-sciences-giving/">View All Animal Sciences Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../animal-sciences-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['animal-sciences-giving']; ?>'>&nbsp;&nbsp;Animal Sciences Dept.</option>
                     
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/entomology-and-nematology-giving/">View All Entomology and Nematology Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../entomology-and-nematology-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['entomology-and-nematology-giving']; ?>'>&nbsp;&nbsp;Entomology and Nematology Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/environmental-horticulture-giving/">View All Environmental Horticulture Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../environmental-horticulture-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['environmental-horticulture-giving']; ?>'>&nbsp;&nbsp;Environmental Horticulture Dept. </option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/family-youth-and-community-sciences-giving/">View All Family, Youth and Community Sciences Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../family-youth-and-community-sciences-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['family-youth-and-community-sciences-giving']; ?>'>&nbsp;&nbsp;Family, Youth and Community Sciences Dept.</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/food-and-resources-economics-giving/">View All Food and Resource Economics Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../food-and-resources-economics-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['food-and-resources-economics-giving']; ?>'>&nbsp;&nbsp;Food and Resource Economics Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/food-science-and-human-nutrition-giving/">View All Food Science and Human Nutrition Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../food-science-and-human-nutrition-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['food-science-and-human-nutrition-giving']; ?>'>&nbsp;&nbsp;Food Science and Human Nutrition Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/horticulture-sciences-giving/">View All Horticultural Sciences Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../horticulture-sciences-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['horticulture-sciences-giving']; ?>'>&nbsp;&nbsp;Horticultural Sciences Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/soil-and-water-science-giving/">View All Soil and Water Science Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../soil-and-water-science-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['soil-and-water-science-giving']; ?>'>&nbsp;&nbsp;Soil and Water Science Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/wildlife-ecology-and-conservation-giving/">View All Wildlife Ecology and Conservation Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../wildlife-ecology-and-conservation-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['wildlife-ecology-and-conservation-giving']; ?>'>&nbsp;&nbsp;Wildlife Ecology and Conservation Dept.</option>
</select>
</form>
<ul id="education_list"></ul>

<h4>Research</h4>
<form>
<select id="research">
  <option selected="selected" value = "0">Please Select</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/citrus-giving/">View All Citrus Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../citrus-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['citrus-giving']; ?>'>Citrus</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/insects-giving/">View All Insects Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../insects-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['insects-giving']; ?>'>Insects</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/livestock-giving/">View All Livestock Giving &nbsp;&rarr;</a></h6></li>'>&nbsp;&nbsp;----Livestock----</option>		   
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016155&appealcode=GSG6O">Florida Cattlemens Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014301&appealcode=GSG6O">Harriet B. Weeks Bovine Research Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019225&appealcode=GSG6O">Santa Fe River Ranch Center for Studies in Animal Sciences and Wetlands Research Fund</a></li></ul>'>&nbsp;&nbsp;Beef Cattle</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001313&appealcode=GSG6O">Natzke Dairy Science Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012575&appealcode=GSG6O">L. E. "Red" Larson Dairy Endowment</a></li></ul>'>&nbsp;&nbsp;Dairy Cattle</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006321&appealcode=GSG6O">S. M. Wall Fund</a></li></ul>'>&nbsp;&nbsp;Horses</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/natural-resources-giving/">View All Natural Resources Giving &nbsp;&rarr;</a></h6></li>'>&nbsp;&nbsp;----Natural Resources----</option>				   
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000161&appealcode=GSG6O">William Paul Shelley, Sr. Memorial Fund in Forestry</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019241&appealcode=GSG6O">Hugh E. Rhodes Endowment</a></li></ul>'>&nbsp;&nbsp;Forestry</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007245&appealcode=GSG6O">Boston Endowment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018507&appealcode=GSG6O">UF-WBL Program Enhancement Fund</a></li></ul>'>&nbsp;&nbsp;Wetlands</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011183&appealcode=GSG6O">Oslo Riverfront Conservation Area Environmental Education</a></li></ul>'>&nbsp;&nbsp;Conservation</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013963&appealcode=GSG6O">Joye Giglia Endowment for Innovative Agricultural Technology</a></li></ul>'>&nbsp;&nbsp;Water</option>		
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/plants-giving/">View All Plants Giving &nbsp;&rarr;</a></h6></li>'>&nbsp;&nbsp;----Plants----</option>				   
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016493&appealcode=GSG6O">Florida Chapter ISA Arboriculture Endowment Fund</a></li></ul>'>&nbsp;&nbsp;Arboriculture</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003129&appealcode=GSG6O">Florida Nursery, Growers and Landscape Association Endowed Research Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013533&appealcode=GSG6O">National Foliage Foundation Graduate Assistantship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013825&appealcode=GSG6O">Orlando Garden Club Fellowships in honor of Mary S. Compton and Ann Guthrie</a></li></ul>'>&nbsp;&nbsp;Environmental Horticulture</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012335&appealcode=GSG6O">Florida Mango Forum Endowment</a></li></ul>'>&nbsp;&nbsp;Fruit</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014725&appealcode=GSG6O">Miami-Dade Chapter Florida Nursery, Growers and Landscape Association-TREC Research Endowment</a></li></ul>'>&nbsp;&nbsp;Horticulture</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005181&appealcode=GSG6O">Donald F. May Endowment for Ornamental Research</a></li></ul>'>&nbsp;&nbsp;Ornamental</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006127&appealcode=GSG6O">Calvin L. Korf Turfgrass Research Fund</a></li></ul>'>&nbsp;&nbsp;Turfgrass</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014311&appealcode=GSG6O">Gary Henry Endowment for the Study of Florida Native Wildflowers</a></li></ul>'>&nbsp;&nbsp;Wildflowers</option>
</select>
</form>
<ul id="research_list"></ul>

<h4>Extension</h4>
<form>
<select id="extension">
  <option selected="selected" value = "0">Please Select</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/faculty-support-giving/">View All Faculty Support Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../faculty-support-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['faculty-support-giving']; ?>'>Faculty Support</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/4-h-giving/">View All 4-H Youth Development Giving &nbsp;&rarr;</a></h6></li>
                   <?php
                    ob_start();
                    include ("../4-h-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['4-h-giving']; ?>'>4-H Youth Development</option>
</select>
</form>
<ul id="extension_list"></ul>

<h4>Other Areas of Interest</h4>
<form>
<select id="other">
  <option selected="selected" value = "0">Please Select</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005107&appealcode=GSG6O">Wedgworth Leadership Institute</a></li></ul>'>Wedgworth Leadership Institute</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004695&appealcode=GSG6O">Florida Medical Entomology Lab</a></li></ul>'>Florida Medical Entomology Lab</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007535&appealcode=GSG6O">Plant Science Research and Education Unit at Citra</a></li></ul>'>Plant Science Research and Education Unit at Citra</option>
  <option value = '<ul><li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003773&appealcode=GSG60">Alumni and Friends-CALS</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017971&appealcode=GSG60">CALS Florida Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016277&appealcode=GSG60">FAWN-Florida Automated Weather Network</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001383&appealcode=GSG60">Geomatics Support Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018927&appealcode=GSG60">Limagrain Challenge 2050 Project Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018879&appealcode=GSG60">Mosaic 4R Stewardship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012187&appealcode=GSG60">Project Learning Tree</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016889&appealcode=GSG60">Southern Cone Conservation Leadership Fund</a></li></ul>'>Non-endowed Funds</option>
</select>
</form>
<ul id="other_list"></ul>


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$( document ).ready(function() {
    $("select").val("0");
});
  
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
      	//alert(selectArray[i].parentNode.nextElementSibling.tagName);
		selectArray[i].parentNode.nextElementSibling.innerHTML = "";
	}
	//listElement.innerHTML = "";  	
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
</script>


  </div>
    
    <!--End Left Column-->