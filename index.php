
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular-route.min.js"></script>
        <script src="app.js"></script>
    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
        <div>
            <input type="file" file-model="myFile"/>
            <button ng-click="uploadFile()">upload me</button>
        </div>
    </body>
 </html>
