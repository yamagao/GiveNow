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
                    include ("../rcrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['rcrec-giving']; ?>'>&nbsp;&nbsp;North Florida REC (Marianna, Quincy)</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/rcrec-giving/">View All Range Cattle REC Giving &nbsp;&rarr;</a></h6></li>
  				   <?php
                    ob_start();
                    include ("../nfrec-giving/index.php");
                    ob_end_clean();                    
                    echo $GLOBALS['nfrec-giving']; ?>'>&nbsp;&nbsp;Range Cattle REC (Ona)</option>
				   
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
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007313&appealcode=GSG6O">A. S. Herlong, Sr. Fund</a></li>
  				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000609&appealcode=GSG6O">Alvin T. Wallace Scholarship Fund</a></li>
    			   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011233&appealcode=GSG6O">Bobby F. McKown  Endowment Fund</a></li>
    			   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002279&appealcode=GSG6O">Branan Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011861&appealcode=GSG6O">CALS Alumni Scholarship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007397&appealcode=GSG6O">Central Florida Fair Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008471&appealcode=GSG6O">Charles and Thelma Palmer Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002681&appealcode=GSG6O">Coca-Cola Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002575&appealcode=GSG6O">Doris Lowe and Earl and Verna Lowe Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002731&appealcode=GSG6O">Doyle Conner Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006423&appealcode=GSG6O">E. T. York, Jr. Medal of Excellence</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001485&appealcode=GSG6O">Edgar A. Martin Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000679&appealcode=GSG6O">Ernest F. Lamothe Agricultural Scholarships</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011131&appealcode=GSG6O">Eugene Chester Terzenbach Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008499&appealcode=GSG6O">Florida Fertilizer & Agrichemical Association Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005767&appealcode=GSG6O">Florida Rural Rehabilitation Corporation Endowed Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002171&appealcode=GSG6O">Florida Rural Rehabilitation Corporation, Inc., Scholarship Fund in Agriculture</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012561&appealcode=GSG6O">Fred Montsdeoca Scholarship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006387&appealcode=GSG6O">Fred W. and Mabel H. Barber Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005133&appealcode=GSG6O">George K. and Ruthanna Davis Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004645&appealcode=GSG6O">Gerald L. Zachariah Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000689&appealcode=GSG6O">Grebe-Wahlberg Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000377&appealcode=GSG6O">Harold E. Kendall, Sr. Endowed Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016207&appealcode=GSG6O">Harry Haman College of Agricultural and Life Sciences Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007991&appealcode=GSG6O">J. Milton Brownlee Agricultural Marketing Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002221&appealcode=GSG6O">J. N. Watson Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002523&appealcode=GSG6O">J. R. Greenman Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019527&appealcode=GSG6O">J. Wayne Reitz Medal of Excellence Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011247&appealcode=GSG6O">Jack L. Fry Graduate Teaching Award Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013059&appealcode=GSG6O">Jimmy Cheek Ambassadors Enrichment Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013493&appealcode=GSG6O">Jimmy G. Cheek Graduate Student Medal of Excellence Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001173&appealcode=GSG6O">John F. Smoak Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005059&appealcode=GSG6O">John H. G. Hutchinson Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013453&appealcode=GSG6O">Kenneth R. and Waynell Tefertiller Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007661&appealcode=GSG6O">Larry J. Connor Diversity Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014099&appealcode=GSG6O">Marion County Farm Bureau Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007993&appealcode=GSG6O">Marvis B. Roberts, Sr. Agricultural Finance Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011383&appealcode=GSG6O">Mary Ann Jones Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013005&appealcode=GSG6O">Michael V. Martin CALS Ambassador Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008823&appealcode=GSG6O">Muriel Rumsey Foundation Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007965&appealcode=GSG6O">Nathan Mayo Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008119&appealcode=GSG6O">Orange County Farm Bureau Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013583&appealcode=GSG6O">Paul and Shari Willis CALS Ambassadors Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002983&appealcode=GSG6O">Price Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001709&appealcode=GSG6O">R. D. Keene Memorial Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007883&appealcode=GSG6O">Robert J. and Jane H. Barben Family Scholarship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007885&appealcode=GSG6O">Student Enrichment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008407&appealcode=GSG6O">Suwannee County Conservation District and W. B. Copeland Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018401&appealcode=GSG6O">Suwannee River Resource, Conservation and Development Council Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006039&appealcode=GSG6O">Timer E. Powers Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018545&appealcode=GSG6O">Vam C. York Agricultural Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007895&appealcode=GSG6O">Velma Lykes Fruit Crop Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000583&appealcode=GSG6O">Virginia Hurst Whitehill Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007859&appealcode=GSG6O">Wayne Hawkins Agricultural Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006289&appealcode=GSG6O">William C. and Bertha M. Cornett Fellowship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000855&appealcode=GSG6O">William F. Ward Memorial Scholarship</a></li></ul>'>College of Ag and Life Sciences</option>

  <option value = '' disabled>&nbsp;&nbsp;----Academic Departments----</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/agricultural-education-and-communication-giving/">View All Agricultural Education and Communication Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016319&appealcode=GSG6O">Agricultural Education and Communication General Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001177&appealcode=GSG6O">W. T. Loften Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003251&appealcode=GSG6O">Cope and Edna Newbern Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004283&appealcode=GSG6O">Agricultural Education Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006337&appealcode=GSG6O">Marion C. Roche Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007191&appealcode=GSG6O">Elton Hinton Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012413&appealcode=GSG6O">John and Ethel Stephens Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013163&appealcode=GSG6O">Bishop Brothers Scholarship and Student Enrichment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013165&appealcode=GSG6O">Omar Ergle and Floyd Philmon Scholarship and Student Enrichment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013167&appealcode=GSG6O">Ryan Rimmer Memorial Scholarship and Student Enrichment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013169&appealcode=GSG6O">Carl E. Beeman Scholarship and Student Enrichment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016643&appealcode=GSG6O">Carl and Jean Rehwinkel Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018965&appealcode=GSG6O">Richard and Nell Kelly Scholarship</a></li></ul>'>&nbsp;&nbsp;Agricultural Education and Communication Dept.</option>
 
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/agricultural-and-biological-engineering-giving/">View All Agricultural and Biological Engineering Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000055&appealcode=GSG6O">Agricultural and Biological Engineering</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001631&appealcode=GSG6O">Florida Section ASABE Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002449&appealcode=GSG6O">Rush Choate Endowed Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002897&appealcode=GSG6O">John B. Boy/US Sugar in Agricultural Engineering Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007321&appealcode=GSG6O">Bob and Virginia Peart Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007725&appealcode=GSG6O">Giles and Martha Van Duyne Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008187&appealcode=GSG6O">Sun-Fu "Tony" Shih Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008393&appealcode=GSG6O">Allen G. Smajstrla Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011709&appealcode=GSG6O">Packaging Education Forum Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013359&appealcode=GSG6O">McNair Bostick Scholarship</a></li></ul>'>&nbsp;&nbsp;Agricultural and Biological Engineering Dept.</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/agronomy-giving/">View All Agronomy Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001069&appealcode=GSG6O">Agronomy</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002107&appealcode=GSG6O">Agronomy Seed Laboratory</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002701&appealcode=GSG6O">Fred Hull Agronomy Achievement Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002705&appealcode=GSG6O">Paul R. Harris Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003453&appealcode=GSG6O">Agronomy-Soils Club/Florida Foundation Seed Producers Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017225&appealcode=GSG6O">John R. Edwardson Agronomy Endowment</a></li></ul>'>&nbsp;&nbsp;Agronomy Dept.</option>
	
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/animal-sciences-giving/">View All Animal Sciences Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000905&appealcode=GSG6O">Animal Sciences</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000573&appealcode=GSG6O">Cecil Webb Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001047&appealcode=GSG6O">C. W. Reaves 4-H Dairy Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001313&appealcode=GSG6O">Natzke Dairy Science Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002415&appealcode=GSG6O">Don Wakeman Student Judging Support Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002741&appealcode=GSG6O">Jo Ann Smith Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002993&appealcode=GSG6O">Susan Brown Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004005&appealcode=GSG6O">Elroy L. Decker Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004503&appealcode=GSG6O">Gwen and Tony J. Cunha Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004513&appealcode=GSG6O">Kathryn Harms Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005645&appealcode=GSG6O">R. B. Becker Scholarship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005853&appealcode=GSG6O">Wilmer W. and Melda Bassett Endowment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005877&appealcode=GSG6O">American Agrivest Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006321&appealcode=GSG6O">S. M. Wall Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007179&appealcode=GSG6O">Floyd "Sonny" Tillman Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007245&appealcode=GSG6O">Boston Endowment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008643&appealcode=GSG6O">A. C. Asbury, DVM Equine Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012143&appealcode=GSG6O">Bedford Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012347&appealcode=GSG6O">Folke Peterson Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012705&appealcode=GSG6O">Dewey and Lynn Burnsed Endowment in IFAS</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013637&appealcode=GSG6O">Koger-Warnick Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014301&appealcode=GSG6O">Harriet B. Weeks Bovine Research Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016627&appealcode=GSG6O">James Hollis Tillman Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017207&appealcode=GSG6O">Anita Lee Childs Scholarship/Fellowship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019225&appealcode=GSG6O">Santa Fe River Ranch Center for Studies in Animal Sciences and Wetlands Research Fund</a></li>'>&nbsp;&nbsp;Animal Sciences Dept.</option>
                     
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/entomology-and-nematology-giving/">View All Entomology and Nematology Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001071&appealcode=GSG6O">Entomology and Nematology</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000305&appealcode=GSG6O">Gahan Scholarship/Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002189&appealcode=GSG6O">Mulrennan Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003083&appealcode=GSG6O">Urban Pest Control Research</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003813&appealcode=GSG6O">Milledge Murphey Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005175&appealcode=GSG6O">Robert E. Dixon, Jr. Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005497&appealcode=GSG6O">Dempsey R. Sapp, Sr. Urban Entomology Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005771&appealcode=GSG6O">John T. and Myrtle B. Creighton Scholarship/Fellowship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007187&appealcode=GSG6O">Leland A. Davis Memorial Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007269&appealcode=GSG6O">C. P. and Lynn Steinmetz Scholarship/Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007421&appealcode=GSG6O">Carolyn D. Richardson Scholarship in Urban Entomology</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007521&appealcode=GSG6O">Dr. Lawrence A. Hetrick Fund for Scholarships/Fellowships</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008085&appealcode=GSG6O">Thomas J. and Jane B. Walker Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008337&appealcode=GSG6O">Pauline O. Lawrence Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008893&appealcode=GSG6O">Everett R. Mitchell Memorial Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011603&appealcode=GSG6O">J. L. Knapp Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012487&appealcode=GSG6O">David Williams Scholarship/Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012489&appealcode=GSG6O">Book Scholarship/Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013855&appealcode=GSG6O">Thomas J. Walker Endowment for UFs Natural Area Teaching Laboratory</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014953&appealcode=GSG6O">Nan-Yao and Jill H. Su Endowed Scholarship/Fellowship Fund</a></li></ul>'>&nbsp;&nbsp;Entomology and Nematology Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/environmental-horticulture-giving/">View All Environmental Horticulture Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/onlinegiving/FundDetail.asp?FundCode=000847&appealcode=GSG6O">Environmental Horticulture</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002413&appealcode=GSG6O">AOS/11WOC Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004037&appealcode=GSG6O">Arthur C. Andres Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006595&appealcode=GSG6O">Gene and Barbara Batson Endowed Nursery Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013529&appealcode=GSG6O">Environmental Horticulture Turfgrass Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013533&appealcode=GSG6O">National Foliage Foundation Graduate Assistantship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013549&appealcode=GSG6O">Mike Hackmann Memorial Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013825&appealcode=GSG6O">Orlando Garden Club Fellowships in honor of Mary S. Compton and Ann Guthrie</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014311&appealcode=GSG6O">Gary Henry Endowment for the Study of Florida Native Wildflowers</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014703&appealcode=GSG6O">Raymond P. and Jane F. Oglesby Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016493&appealcode=GSG6O">Florida Chapter ISA Arboriculture Endowment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017941&appealcode=GSG6O">Robert M. Scully, Sr., Scholarship in Orchids</a></li></ul>'>&nbsp;&nbsp;Environmental Horticulture Dept. </option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/family-youth-and-community-sciences-giving/">View All Family, Youth and Community Sciences Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007503&appealcode=GSG6O">Family Youth and Community Sciences</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018107&appealcode=GSG6O">Dr. Barbara E. Taylor Fellowship for Graduate Studies</a></li></ul>'>&nbsp;&nbsp;Family, Youth and Community Sciences Dept.</option>
				   
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/food-and-resources-economics-giving/">View All Food and Resource Economics Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001073&appealcode=GSG6O">Food and Resource Economics</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000113&appealcode=GSG6O">Hal W. Lively Memorial Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000395&appealcode=GSG6O">R. Holt Howard Endowed Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001553&appealcode=GSG6O">Mr. and Mrs. John V. D Albora, Jr. Scholarship in Honor of J. Wayne Reitz</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003933&appealcode=GSG6O">W. W. McPherson Memorial Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006107&appealcode=GSG6O">J. E. Ross International Travel Award</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007399&appealcode=GSG6O">Cecil N. and Cecile G. Smith Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008083&appealcode=GSG6O">Don Thomas Memorial Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008871&appealcode=GSG6O">Werner and Margaret C. Husmann Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011027&appealcode=GSG6O">Phillip L. Herndon Endowment in Economics</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014103&appealcode=GSG6O">W. Bernard and Elaine P. Lester Student Development</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014967&appealcode=GSG6O">Robert G. Stubbs and Henry G. Hamilton Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016091&appealcode=GSG6O">Williamson Agricultural Land Environment Service and Research Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016633&appealcode=GSG6O">Harold B. Clark Award</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017203&appealcode=GSG6O">Allison Family Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001897&appealcode=GSG6O">Dorothy F. Wershow Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001455&appealcode=GSG6O">Ben Hill Griffin, Jr. Eminent Scholar Chair in Agricultural Economics Marketing</a></li></ul>'>&nbsp;&nbsp;Food and Resource Economics Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/food-science-and-human-nutrition-giving/">View All Food Science and Human Nutrition Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/onlinegiving/FundDetail.asp?FundCode=001075&appealcode=GSG6O">Food Science and Human Nutrition</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001857&appealcode=GSG6O">Boston Family Eminent Scholar Chair in Human Nutrition</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003581&appealcode=GSG6O">Earl Wilmot Hartt Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006297&appealcode=GSG6O">Robert H. Olson Graduate Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011091&appealcode=GSG6O">William L. and Agnes F. Brown Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011117&appealcode=GSG6O">Eugene E. Woodward Memorial Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011739&appealcode=GSG6O">Lee C. Yeomans Fisheries and Aquatic Sciences Fellowship Fund</a></li></ul>'>&nbsp;&nbsp;Food Science and Human Nutrition Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/horticulture-sciences-giving/">View All Horticultural Sciences Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000067&appealcode=GSG6O">Horticultural Sciences</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000445&appealcode=GSG6O">Fred P. Lawrence Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001031&appealcode=GSG6O">L. W. Ziegler Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001583&appealcode=GSG6O">H. Spyke Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002445&appealcode=GSG6O">Southwest Florida Vegetable Growers</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002779&appealcode=GSG6O">Harry R. Manee, Sr. Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=004471&appealcode=GSG6O">A. H. Krezdorn Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005305&appealcode=GSG6O">John W. Sites Memorial</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006495&appealcode=GSG6O">James Soule Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007489&appealcode=GSG6O">Vasil-Monsanto Endowed Professorship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012303&appealcode=GSG6O">Ralph H. and Alice J. Sharpe Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012887&appealcode=GSG6O">Florida Agriculture Conference and Trade Show Conference Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014107&appealcode=GSG6O">Hughes Estate Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=016669&appealcode=GSG6O">James W. Putnam Scholarship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018901&appealcode=GSG6O">Stephen Futch Extension Horticultural Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019301&appealcode=GSG6O">Horticultural Sciences Scholarship and Fellowship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019307&appealcode=GSG6O">Norman F. Childers Scholarship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001925&appealcode=GSG6O">C. V. Griffin, Sr. Eminent Scholar Chair in Agriculture</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000491&appealcode=GSG6O">Lyle C. Dickman Eminent Scholar Chair in Plant Improvement</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001193&appealcode=GSG6O">Plant Pathology</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002103&appealcode=GSG6O">F. A. Wood Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017227&appealcode=GSG6O">John R. Edwardson Plant Pathology Endowment</a></li></ul>'>&nbsp;&nbsp;Horticultural Sciences Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/soil-and-water-science-giving/">View All Soil and Water Science Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=000475&appealcode=GSG6O">Soil and Water Science</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001993&appealcode=GSG6O">Oliver S. Polston Memorial Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=002463&appealcode=GSG6O">Frederick B. Smith Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007437&appealcode=GSG6O">Victor W. Carlisle Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=007857&appealcode=GSG6O">William K. "Bill" Robertson Fellowship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012901&appealcode=GSG6O">Benjamin L. Skulnick Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014553&appealcode=GSG6O">Donald A. Graetz Education Enrichment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018507&appealcode=GSG6O">UF-WBL Program Enhancement Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018697&appealcode=GSG6O">UF Soil and Water Science Program Enhancement Fund</a></li></ul>'>&nbsp;&nbsp;Soil and Water Science Dept.</option>

  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/wildlife-ecology-and-conservation-giving/">View All Wildlife Ecology and Conservation Dept. Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005383&appealcode=GSG6O">Wildlife Ecology and Conservation</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013403&appealcode=GSG6O">Florida Wildlife Federation Scholarship for Wildlife Ecology and Conservation</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014233&appealcode=GSG6O">Monica Christina Stokely Memorial Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019249&appealcode=GSG6O">Nancy Kay Czerwinski Looney Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019531&appealcode=GSG6O">Thad H. Owens Memorial Endowment for Wildlife Ecology and Conservation</a></li></ul>'>&nbsp;&nbsp;Wildlife Ecology and Conservation Dept.</option>
</select>
</form>
<ul id="education_list"></ul>

<h4>Research</h4>
<form>
<select id="research">
  <option selected="selected" value = "0">Please Select</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/citrus-giving/">View All Citrus Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=001767&appealcode=GSG6O">Charles M. Shinn, Jr. Endowment for Citrus Research</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018747&appealcode=GSG6O">Marjorie G. Riley Citrus Research Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003145&appealcode=GSG6O">Hunt Bros Endowment for Fellowship in Citrus Research & Education Lake Alfred</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018807&appealcode=GSG6O">C.D. Hughes and Sons Research Endowment</a></li></ul>'>Citrus</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/insects-giving/">View All Insects Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003083&appealcode=GSG6O">Urban Pest Control Research</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008085&appealcode=GSG6O">Thomas J. and Jane B. Walker Fund</a></li></ul>'>Insects</option>
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
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=003285&appealcode=GSG6O">Watkins Professional Improvement Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=005907&appealcode=GSG6O">John and Martha Woeste Professional Award</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011149&appealcode=GSG6O">Alto and Patrecia Straughn Extension Educational Improvement Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=011759&appealcode=GSG6O">Straughn 4-H Faculty Fellowship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013135&appealcode=GSG6O">Florida Association of County Agricultural Agents Educational Scholarship Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013495&appealcode=GSG6O">Freddie and Ronnie Johnson County Faculty Professional Development Award</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013837&appealcode=GSG6O">Seymour Goldweber Faculty Fellowship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013839&appealcode=GSG6O">Christine Waddill Faculty Fellowship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013841&appealcode=GSG6O">Arthur Hornsby Faculty Fellowship Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013843&appealcode=GSG6O">Master Gardener Faculty Fellowship Endowment</a></li></ul>'>Faculty Support</option>
  <option value = '<li style=" list-style-type: none;"><h6><a href="http://give.ifas.ufl.edu/4-h-giving/">View All 4-H Youth Development Giving &nbsp;&rarr;</a></h6></li>
                   <ul>
                   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008507&appealcode=GSG6O">Escambia County 4-H Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017917&appealcode=GSG6O">Palm Beach County 4-H Endowment Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006085&appealcode=GSG6O">T. G. Williamson Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=006385&appealcode=GSG6O">Fred W. and Mabel H. Barber 4-H Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=008913&appealcode=GSG6O">Florida Rural Rehabilitation Corporation 4-H Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=012573&appealcode=GSG6O">L. E. "Red" Larson 4-H Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=013531&appealcode=GSG6O">Boyd Family Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014661&appealcode=GSG6O">Raymond E. and Karola M. Passage IFAS/4-H Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=014995&appealcode=GSG6O">William and Jane Groot-Camp Cloverleaf Endowed Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=017133&appealcode=GSG6O">Colleen W. McCreary Florida 4-H Scholarship</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019051&appealcode=GSG6O">Dr. Joe and Elta Busby 4-H Endowment</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=019147&appealcode=GSG6O">Wilmer W. and Melda H. Bassett 4-H Fund</a></li>
				   <li><a href="https://www.uff.ufl.edu/OnlineGiving/FundDetail.asp?FundCode=018783&appealcode=GSG60">Florida 4-H Clover Society</a></li></ul>'>4-H Youth Development</option>
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