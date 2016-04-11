<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
                display: none !important;
            }
        </style>
    </head>
    <body data-ng-cloak>
        <div class="container" data-ng-controller="PersonController as vm">
            <div class="row" style="margin-top: 80px;">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form role="form" class="row" data-ng-submit="vm.save()">
                                <div class="form-group col-sm-5">
                                    <label class="sr-only" for="">First name</label>
                                    <input type="text" class="form-control" id="" placeholder="First name" required data-ng-model="vm.personInfo.firstname">
                                </div>
                                <div class="form-group col-sm-5">
                                    <label class="sr-only" for="">Last name</label>
                                    <input type="text" class="form-control" id="" placeholder="Last name" required data-ng-model="vm.personInfo.lastname">
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </form>
                            <hr/>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="1%">#</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th width="1%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-ng-repeat="person in vm.personList">
                                        <td>@{{$index+1}}</td>
                                        <td>@{{person.firstname}}</td>
                                        <td>@{{person.lastname}}</td>
                                        <td>
                                            <a href="" data-ng-click="vm.deletePerson(person)" class="text-danger"><span class="glyphicon glyphicon-remove"></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/lib/angular/angular.min.js"></script>
        <script type="text/javascript" src="assets/js/app.module.js"></script>
        <script type="text/javascript" src="assets/js/person.controller.js"></script>
        <script type="text/javascript" src="assets/js/person.factory.js"></script>
    </body>
</html>
