var app = angular.module('UMHIndex', []);
angular.module('UMHIndex').config(appconfig);
appconfig.$inject = ['$httpProvider'];
function appconfig($httpProvider){
    $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    $httpProvider.defaults.headers.common['X-CSRF-Token'] = $('meta[name="csrf-token"]').attr('content');
}
app.controller('RegisterServiceProver', function($scope,$http) {
	$scope.SPregisterSubmit=function(){
		
		/*
        infodata = {first_name:$scope.first_name};
		$http.post("insertAddress.php", infodata).success(function(response, status) {
            alert("Successfully Submited");
        })
        */

        

var registered_company_name='';
if($scope.first_name==undefined){
    registered_company_name='';
}else{
     registered_company_name=$scope.registered_company_name;
    }
    

if($scope.first_name==undefined){
    alert("please insert first name");
     $("#first_name").focus();
    return false;
}

if($scope.last_name==undefined){
    alert("please insert last name");
     $("#last_name").focus();
    return false;
}

if($scope.address==undefined){
    alert("please insert address");
     $("#address").focus();
    return false;
}

if($scope.state_id==undefined){
    alert("please insert state");
     $("#state_id").focus();
    return false;
}

if($scope.zipcode==undefined){
    alert("please insert zipcode");
     $("#zipcode").focus();
    return false;
}

if($scope.email==undefined){
    alert("please insert email");
     $("#email").focus();
    return false;
}

var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test($scope.email)) {
    alert('Please provide a valid email address');
    $("#email").focus();
    return false;
}


if($scope.direct_phone_number==undefined){
    alert("please insert direct phone number");
     $("#direct_phone_number").focus();
    return false;
}



if($scope.sms_phone_number==undefined){
    alert("please insert sms phone number");
     $("#sms_phone_number").focus();
    return false;
}

if($scope.HCA_affiliation==undefined){
    alert("please insert HCA Affiliation");
     $("#HCA_affiliation").focus();
    return false;
}

if($scope.jobtype_group_id==undefined){
    alert("please insert job type");
     $("#jobtype_group_id").focus();
    return false;
}

if($scope.discipline_id==undefined){
    alert("please insert discipline");
     $("#discipline_id").focus();
    return false;
}

if($scope.licenseid==undefined){
    alert("please insert license");
     $("#licenseid").focus();
    return false;
}

if($scope.national_provider_identifer==undefined){
    alert("please insert mational provider identifer");
     $("#national_provider_identifer").focus();
    return false;
}

if($scope.password==undefined){
    alert("please insert password");
     $("#password").focus();
    return false;
}

if($scope.cpassword==undefined){
    alert("please insert confirm password");
     $("#cpassword").focus();
    return false;
}


if($scope.password!=$scope.cpassword){
     alert("Password and confirm password is not matching");
     $("#cpassword").focus();
    return false;
}

if($scope.termscondition==undefined){
    alert("Please check terms and conditions");
     $("#cpassword").focus();
    return false;
}


$http({
        method : "POST",
        url : "index/checkemailid",
        data:{email:$scope.email},
    }).then(function mySucces(response) {
        if(response.data!=0){
            alert("Email already exist");
            return false;
        }
    }, function myError(response) {
       console.log('error');
    });


        var request = $http({
    method: "post",
    url: "index/saveserviceprovider",
    data: {
        first_name: $scope.first_name,
        last_name: $scope.last_name,
        registered_company_name:registered_company_name,
        address:$scope.address,
        city:$scope.city,
        state_id:$scope.state_id,
        zipcode:$scope.zipcode,
        email:$scope.email,
        direct_phone_number:$scope.direct_phone_number,
        sms_phone_number:$scope.sms_phone_number,
        HCA_affiliation:$scope.HCA_affiliation,
        jobtype_group_id:$scope.jobtype_group_id,
        discipline_id:$scope.discipline_id,
        licenseid:$scope.licenseid,
        national_provider_identifer:$scope.national_provider_identifer,
        password:$scope.password

    },
    headers: { 'Content-Type': 'application/json' }
});

/* Check whether the HTTP Request is successful or not. */
request.success(function (data) {
    alert("Successfully Registered")
});
request.error(function (data) {
    //console.log('error here');
    console.log('error');
});

        /*$http({
        method : "GET",
        url : "index/saveserviceprovider",
        data:infodata,
    }).then(function mySucces(response) {
        console.log(response);
    }, function myError(response) {
       console.log('error');
    });*/
	}

    
});

app.controller('RegisterAgencies',function($scope,$http){
    $scope.AgnciregisterSubmit=function(){

        var registered_company_name='';
if($scope.first_name==undefined){
    registered_company_name='';
}else{
     registered_company_name=$scope.registered_company_name;
    }

    if($scope.first_name==undefined){
    alert("please insert first name");
     $("#first_name").focus();
    return false;
}

if($scope.last_name==undefined){
    alert("please insert last name");
     $("#last_name").focus();
    return false;
}

if($scope.address==undefined){
    alert("please insert address");
     $("#address").focus();
    return false;
}

if($scope.state_id==undefined){
    alert("please insert state");
     $("#state_id").focus();
    return false;
}

if($scope.zipcode==undefined){
    alert("please insert zipcode");
     $("#zipcode").focus();
    return false;
}

if($scope.email==undefined){
    alert("please insert email");
     $("#email").focus();
    return false;
}

if($scope.direct_phone_number==undefined){
    alert("please insert direct phone number");
     $("#direct_phone_number").focus();
    return false;
}

if($scope.sms_phone_number==undefined){
    alert("please insert sms phone number");
     $("#sms_phone_number").focus();
    return false;
}

if($scope.password==undefined){
    alert("please insert password");
     $("#password").focus();
    return false;
}

if($scope.cpassword==undefined){
    alert("please insert confirm password");
     $("#cpassword").focus();
    return false;
}


if($scope.password!=$scope.cpassword){
     alert("Password and confirm password is not matching");
     $("#cpassword").focus();
    return false;
}

if($scope.termscondition==undefined){
    alert("Please check terms and conditions");
     $("#cpassword").focus();
    return false;
}


$http({
        method : "POST",
        url : "index/checkemailid",
        data:{email:$scope.email},
    }).then(function mySucces(response) {
        if(response.data!=0){
            alert("Email already exist");
            return false;
        }
    }, function myError(response) {
       console.log('error');
    });


    var request = $http({
    method: "post",
    url: "index/saveagencies",
    data: {
        first_name: $scope.first_name,
        last_name: $scope.last_name,
        registered_company_name:$scope.registered_company_name,
        address:$scope.address,
        city:$scope.city,
        state_id:$scope.state_id,
        zipcode:$scope.zipcode,
        email:$scope.email,
        direct_phone_number:$scope.direct_phone_number,
        sms_phone_number:$scope.sms_phone_number,
        password:$scope.password
    },
    headers: { 'Content-Type': 'application/json' }
});
 request.success(function (data) {
    alert("Successfully Registered")
});
request.error(function (data) {
    console.log('error');
});

    }
})

app.controller('loginContoller',function($scope,$http){

    $scope.LoginClick=function(){

        if($scope.uname==undefined){
            alert("please insert username");
            $("#uname").focus();
            return false;
        }

        if($scope.userpassword==undefined){
            alert("please insert password");
            $("#userpassword").focus();
            return false;
        }

        $http({
        method : "POST",
        url : "index/loginprocess",
        data:{username:$scope.uname,password:$scope.userpassword},
        }).then(function mySucces(response) {
            console.log(response);
            if(response.data=='invalid'){
                alert('username/password not correct');
                return false;
            }else{

                var url='';
                switch(response.data){
                    case 'HCA':
                    url='hca/index';
                    break;

                    case 'SP':
                    url='sp/index';
                    break;
                }
                //console.log(url);
                window.location.href=url;
            }
        }, function myError(response) {
            console.log('error');
        });
    }
   
})