<?php
// inclusion of config.php
require_once __DIR__.'/../inc/config.php' ;

// When the form has been submitted
if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['Firstname'])) {
        $firstName = trim(strip_tags($_POST['Firstname'])) ;
    } else {
        $firstName = '' ;
    }

    if (isset($_POST['Lastname'])) {
        $lastName = trim(strip_tags($_POST['Lastname'])) ;
    } else {
        $lastName = '' ;
    }

    if (isset($_POST['Email'])) {
        $email = trim(strip_tags($_POST['Email'])) ;
    } else {
        $email = '' ;
    }
    if (isset($_POST['Text'])) {
        $text = trim(strip_tags($_POST['Text'])) ;
    } else {
        $text = '' ;
    }
    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'] ;
        $curl = new Curl\Curl();
        $curl->post('https://www.google.com/recaptcha/api/siteverify', array(
            'secret' => '6LeoijgUAAAAAKvQGs2U9qwsZZlItJTGIDcQ3Izv',
            'response' => $captcha,
            ));
        $captchaResp = json_decode($curl->response, true);
    } else {
        $captchaResp = array() ;
    } ;
// form validation
    $formOk = true ;
    $error = '' ;

    if (strlen($firstName)<2) {
        $formOk = false ;
        $error .= "not a valid first name " ;
    } ;
    if (strlen($lastName)<2) {
        $formOk = false ;
        $error .= "not a valid last name " ;
    } ;
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $formOk = false ;
        $error .= "not a valid email " ;
    } ;
    if (strlen($text)<2) {
        $formOk = false ;
        $error .= "not a valid message " ;
    } ;
    if ($captchaResp['success']!=1) {
        $formOk = false ;
        $error .= "not a valid captcha " ;
    } ;
    if (!empty($error)) {
        echo "<script>alert($error)</script>" ;
    } ;
 // Message submit
    if ($formOk == true) {
        $to = 'alexandre.claudon@gmail.com' ;
        $title = 'Message send by resume contact form' ;
        sendEmail($to, $title, $text) ;
    } ;


} ;// end of if $_POST

// inclusion of the view files
require_once __DIR__.'/../view/header.php' ;
require_once __DIR__.'/../view/contact.php' ;
require_once __DIR__.'/../view/footer.php' ;

?>
