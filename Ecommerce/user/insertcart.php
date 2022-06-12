<?php
session_start();
//session_destroy();
    if(isset($_SESSION['user'])){
    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];

    if(isset($_POST['addcart'])){
        //remove duplicate cart
        $check_product = array_column($_SESSION['cart'],'productName');
        if(in_array($product_name,$check_product)){
            echo "
            <script>
            alert('Product alredy added');
            window.location.href = 'index.php';
            </script>
            ";
        }
        else{
    //session
        $_SESSION['cart'][] = array('productName'=>$product_name,
                                'productPrice'=>$product_price,
                                'productQuantity'=>$product_quantity);
                                header("location:viewcart.php");
            }
    }
    //remove product
    if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value['productName']===$_POST['item']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header("location:viewcart.php");
            }
        }
    }
    //update product cart
    if(isset($_POST['update'])){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value['productName']===$_POST['item']){
                $_SESSION['cart'][$key] = array('productName'=>$product_name,
                                                'productPrice'=>$product_price,
                                                'productQuantity'=>$product_quantity);
                                                header("location:viewcart.php");
            }
        }
    }
}else{
    header("location:form/login.php");
}
?>