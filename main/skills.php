<h1>skills.php</h1>
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi.
Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui.
Nulla elementum dui ut augue. Aliquam vehicula mi at mauris.
Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus.
Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus.
Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis.
Vivamus sollicitudin metus eget eros.
</p>
<style>
.tabs{
	height:30px;
}
.tabs > ul{
	font-size: 1em;
	list-style:none;
}
.tabs > ul > li{
	margin:0 2px 0 0;
	padding:5px 10px;
	display:block;
	float:left;
	color:#FFF;
	-moz-border-radius-topleft: 4px;
	-moz-border-radius-topright: 4px;
	-moz-border-radius-bottomright: 0px;
	-moz-border-radius-bottomleft: 0px;
	border-top-left-radius:4px;
	border-top-right-radius: 4px;
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px;
}
.tabs > ul > li:hover{
	background: #FFFFFF; /* old browsers */
	background: -moz-linear-gradient(top, #FFFFFF 0%, #F3F3F3 10%, #F3F3F3 50%, #FFFFFF 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(10%,#F3F3F3), color-stop(50%,#F3F3F3), color-stop(100%,#FFFFFF)); /* webkit */
	cursor:pointer;
	color: #333;
}
.tabs > ul > li.tabActiveHeader{
	background: #FFFFFF; /* old browsers */
	background: -moz-linear-gradient(top, #FFFFFF 0%, #F3F3F3 10%, #F3F3F3 50%, #FFFFFF 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(10%,#F3F3F3), color-stop(50%,#F3F3F3), color-stop(100%,#FFFFFF)); /* webkit */
	cursor:pointer;
	color: #333;
}
.tabscontent {
	-moz-border-radius-topleft: 0px;
	-moz-border-radius-topright: 4px;
	-moz-border-radius-bottomright: 4px;
	-moz-border-radius-bottomleft: 4px;
	border-top-left-radius: 0px;
	border-top-right-radius: 4px;
	border-bottom-right-radius: 4px;
	border-bottom-left-radius: 4px; 
	padding:10px 10px 25px;
	background: #FFFFFF; /* old browsers */
	background: -moz-linear-gradient(top, #FFFFFF 0%, #FFFFFF 90%, #e4e9ed 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(90%,#FFFFFF), color-stop(100%,#e4e9ed)); /* webkit */
	color:#333;
}
</style>
  <div id="tabContainer">
    <div class="tabs">
      <ul>
        <li id="tabHeader_1">Web Developer</li>
        <li id="tabHeader_2">Graphic design</li>
        <li id="tabHeader_3">Animation</li>
		<li id="tabHeader_4">Modeling</li>
		<li id="tabHeader_5">Video diting</li>
		<li id="tabHeader_6">Publishing</li>
		<li id="tabHeader_7">Photography</li>
      </ul>
    </div>
    <div class="tabscontent">
      <div class="tabpage" id="tabpage_1">
        <h2>Page 1</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_2">
        <h2>Page 2</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_3">
        <h2>Page 3</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_4">
        <h2>Page 4</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
		v
      </div>
      <div class="tabpage" id="tabpage_5">
        <h2>Page 5</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_6">
        <h2>Page 6</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_7">
        <h2>Page 7</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
		<p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
    </div>
  </div>
<script src="main/tabs.js"></script>