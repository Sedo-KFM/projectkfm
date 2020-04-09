<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>

<div ng-app="">
 <button ng-click='hiteBlock = (hiteBlock == 1 ? 0 : 1)'> test </button>
 
 <button ng-click='color = (color == "red" ? "green" : "red")'> test </button>
 
 {{hiteBlock}}
<div ng-show='hiteBlock' style='background-color: {{color}}'> 
  <p>Name: <input type="text" ng-model="name"></p>
  <p>You wrote: {{ name }}</p>
</div>
</div>

</body>
</html>
