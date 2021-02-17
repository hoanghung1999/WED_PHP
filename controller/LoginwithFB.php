<?php
    require_once "dbConnect.php";
    require_once 'vendor/autoload.php';
    if(!session_id()){
        session_start();
    }
    $facebook= new \Facebook\Facebook([
        'app_id'=>'1057874177987021',
        'app_secret'=>'66de472d96463bb5a4a4628dbe3714db',
        'default_graph_version'=>'v2.5',
    ]);
    $facebook_output='';
    $facebook_helper=$facebook->getRedirectLoginHelper();
    if(isset($_GET['code'])){

        if(isset($_GET['access_token'])){
            $access_token=$_SESSION['access_token'];
        }
        else{
            $access_token=$facebook_helper->getAccessToken();
             $_SESSION['access_token']=$access_token;
             $facebook->setDefaultAccessToken($_SESSION['access_token']);
        }
        $graph_response=$facebook->get("/me?fields=name,email",$access_token);
        $facebook_user_info=$graph_response->getGraphUser();
        // echo var_dump($facebook_user_info);
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $sql="SELECT * FROM user WHERE idsocial=".$facebook_user_info['id'];
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $resultSet=$stmt->get_result();
        if($user=$resultSet->fetch_assoc()){
            $_SESSION['login']=true;
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['fullname']=$user['fullname'];
            $_SESSION['positon']=$user['positon'];
            $_SESSION['avatar']=$user['avatar'];

            header('location: CommonUser.php');

        }else{
            $socialId=$facebook_user_info["id"];
            $fullname=$facebook_user_info["name"];
            $positon="0";
            $username=$fullname.$socialId;
            $sqlinsert="INSERT INTO user(username,fullname,positon,idsocial) Values('$username','$fullname','$positon','$socialId')";
            echo $sqlinsert;
            $connect=new DBConnect();
            $conn=$connect->getConnect();
            $stmt=$conn->prepare($sqlinsert);
            $stmt->execute();


        $sqlread="SELECT * FROM user WHERE idsocial=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("i",$facebook_user_info['id']);
        $stmt->execute();
        $resultSet=$stmt->get_result();
        $user=$resultSet->fetch_assoc();
        $_SESSION['login']=true;
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['fullname']=$user['fullname'];
            $_SESSION['positon']=$user['positon'];
            $_SESSION['avatar']=$user['avatar'];
            header('location:../lova/CommonUser.php');
        }
    
        
    }
    else{
          $facebook_permissions=['email'];
           $facebook_login_url=$facebook_helper->getLoginUrl(
            'https://hoanghung.com/lova/login.php',$facebook_permissions 
           );
        }
?>