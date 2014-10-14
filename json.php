<?php

include("js-css.php");
?>

<html ng-app="jsonapp">
<head>
<meta charset ="utf-8"name="viewport" content="width=device-width, initial-scale=1">

	<title>sdf</title>
	<script type="text/javascript" src="app.js"></script>
	<script type="text/javascript" src="dirPagination.js"></script>
</head>
<body ng-controller="myapp" ng-init="getItems()"> 

<ul ng-repeat="item in items | startFrom:currentPage*pageSize | limitTo:pageSize">
<li >
{{item.title}}
{{item.desc}}
</li>
  





</ul>
</div>
       <center>
        <div class="konupka">
  <button ng-disabled="currentPage == 0" ng-click="currentPage=currentPage-1"class="btn btn-danger">
        ئالدىنقىسى
    </button>

    <button ng-disabled="currentPage >= items.length/pageSize - 1" ng-click="currentPage=currentPage+1" class="btn btn-danger">
       كىينكىسى
    </button>
        </center>
</div>
</body>
</html>