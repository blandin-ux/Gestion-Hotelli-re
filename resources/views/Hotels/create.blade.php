<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation</title>
</head>
<body>


<style>
    @font-face {
    font-family: "Muli-Regular";
    src: url("../fonts/muli/Muli-Regular.ttf"); }
    @font-face {
    font-family: "Muli-SemiBold";
    src: url("../fonts/muli/Muli-SemiBold.ttf"); }
    @font-face {
    font-family: "Poppins-Regular";
    src: url("../fonts/poppins/Poppins-Regular.ttf"); }
    @font-face {
    font-family: "Poppins-Medium";
    src: url("../fonts/poppins/Poppins-Medium.ttf"); }
    * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; }

    body {
    font-family: "Poppins-Regular";
    font-size: 13px;
    margin: 0;
    color: #999; 
    background: linear-gradient(175deg, royalblue, transparent); }

    input, textarea, select {
    font-family: "Muli-Regular";
    font-size: 13px;
    color: #666; }

    p, h1, h2, h3, h4, h5, h6, ul {
    margin: 0; }

    img {
    max-width: 100%; }

    ul {
    padding-left: 0;
    margin-bottom: 0; }

    a {
    text-decoration: none; }

    :focus {
    outline: none; }

    .wrapper {
    min-height: 100vh;
    position: relative;
    background: url("../images/bg-registration-form-9.jpg") no-repeat right center;
    background-size: cover; }

    .inner {
    position: absolute;
    top: 50%;
    left: 11.07%;
    transform: translateY(-50%);
    width: 511px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    -ms-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    background: url("../images/bg-inner.png") repeat;
    padding: 7px; }

    form {
    width: 100%;
    padding: 57px 46px 55px;
    background: #fff; }

    select {
    -moz-appearance: none;
    -webkit-appearance: none;
    cursor: pointer; }

    h3 {
    text-transform: uppercase;
    font-size: 23px;
    font-family: "Poppins-Medium";
    color: #3e91f7;
    letter-spacing: 3px;
    margin-bottom: 22px;
    font-weight: 500; }

    .form-row {
    display: flex;
    margin-bottom: 25px; }
    .form-row.last {
        margin-bottom: 22px; }
    .form-row .form-wrapper {
        width: 50%; }
        .form-row .form-wrapper:first-child {
        margin-right: 25px; }

    .form-wrapper {
    position: relative; }
    .form-wrapper label {
        display: block;
        font-family: "Muli-SemiBold";
        font-size: 17px;
        color: #4c4c4c;
        margin-bottom: 8px; }
    .form-wrapper i.zmdi-chevron-down {
        position: absolute;
        right: 16px;
        top: 42px;
        font-size: 15px;
        color: #666; }
    .form-wrapper span.lnr-calendar-full {
        position: absolute;
        left: 16px;
        font-size: 15px;
        color: #666;
        top: 43px; }

    .form-control {
    border: 1px solid #e6e6e6;
    display: block;
    width: 100%;
    height: 42px;
    padding: 0 14px; }
    .form-control.datepicker-here {
        padding-left: 39px; }

    .checkbox {
    position: relative;
    padding-left: 22px; }
    .checkbox label {
        cursor: pointer; }
    .checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer; }
    .checkbox input:checked ~ .checkmark:after {
        display: block; }

    .checkmark {
    position: absolute;
    top: 3px;
    left: 0;
    height: 12px;
    width: 13px;
    border-radius: 2px;
    background-color: #ebebeb;
    border: 1px solid #ccc;
    font-family: Material-Design-Iconic-Font;
    font-size: 10px;
    font-weight: bolder; }
    .checkmark:after {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        content: '\f26b';
        color: #333; }

    button {
    border: none;
    width: 173px;
    height: 42px;
    margin-top: 30px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    background: #3e91f7;
    color: #fff;
    text-transform: uppercase;
    font-family: "Muli-SemiBold";
    font-size: 15px;
    position: relative;
    transition: all 0.3s ease; }
    button span {
        letter-spacing: 3px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s; }
    button:after {
        content: attr(data-text);
        position: absolute;
        width: 100%;
        height: 100%;
        top: 50%;
        left: 0;
        opacity: 0;
        letter-spacing: 3px;
        -webkit-transform: translate(-30%, -25%);
        transform: translate(-30%, -25%);
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s; }
    button:hover {
        background: #0072fd; }
        button:hover span {
        opacity: 0;
        -webkit-transform: translate(0px, 40px);
        transform: translate(0px, 40px); }
        button:hover:after {
        opacity: 1;
        -webkit-transform: translate(0, -25%);
        transform: translate(0, -25%); }

    @media (max-width: 1199px) {
    .wrapper {
        background-position: center center; } }
    @media (max-width: 991px) {
    .inner {
        width: 60%; } }
    @media (max-width: 767px) {
    .inner {
        width: 100%;
        transform: translateY(0);
        position: static;
        padding: 0;
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
        -o-box-shadow: none; }

    .wrapper {
        background: none;
        display: block; }

    form {
        padding: 30px 20px; }

    .form-row {
        display: block; }
        .form-row .form-wrapper {
        width: 100%;
        margin-bottom: 25px; }
        .form-row .form-wrapper:first-child {
            margin-right: 0; } }
    img{
        position: relative;
        float: right;
        border-radius: 16pc 10pc 10pc 1pc;
        height: 10pc;
        box-shadow: 0px 0px 20px;
    }            

    /*# sourceMappingURL=style.css.map */
</style>

<body>
<img src="{{asset('img/coco1_.png')}}" alt="" class="mr-1">
<div class="wrapper">
<div class="inner">
<form enctype="multipart/form-data" action="/hotels" method="POST" >
@csrf
<marquee behavior="" scrollamount="5" direction=""><h3>Ajouter un nouvel hôtel</h3></marquee>
<div class="form-row">
    <div class="form-wrapper col-md-5">
        <label for="">Nom *</label>
        <input type="text" class="form-control" name="name" placeholder="Nom de l'hôtel" required>
    </div>
    <div class="form-wrapper col-md-5">
        <label for="">Télephone *</label>
        <input type="text" class="form-control" placeholder="Numéro de télephone" name="telephone" required>
    </div>
</div>
<div class="form-row">
<div class="form-wrapper col-md-5">
<label for="">Adresse *</label>
<input type="text" class="form-control" name="adresse" placeholder="Adresse de l'hôtel" id="dp1" required>
</div>
<div class="form-wrapper col-md-5">
<label for="">C.P.H *</label>
<input type="text" class="form-control" name="cph" placeholder="Cph de l'hôtel" id="dp2" required>
</div>
</div>
<div class="form-row last">
    <div class="form-wrapper col-md-5 mb-2">
       <label for="">Photo *</label>
       <input name="image_uri" id="" type="file" class="" required>
    </div>
    <div class="form-wrapper col-md-7">
        <label for="">Classe *</label>
        <select name="classe_id" id="" type="text" class="form-control" required>
  <option value="">étoile(s)</option>          
  @foreach($classe as $kelassi)          
  <option value="{{$kelassi->id}}"> {{$kelassi->etoile}} </option>
  @endforeach
</select>
</div>

<div class="form-wrapper">
<i class="zmdi zmdi-chevron-down"></i>
</div>
</div>
<div class="checkbox">
<label>
<input type="checkbox"> Confirmer le formulaire avant de l'enrégistrer
<span class="checkmark"></span>
</label>
</div>
<button data-text="En cours..." class="btn btn-outline-primary">
<span>Envoyer</span>
</button>
</form>
</div>
</div>
<script src="js/jquery-3.3.1.min.js" type="64cb494fb61aae9650038e02-text/javascript"></script>

<script src="vendor/date-picker/js/datepicker.js" type="64cb494fb61aae9650038e02-text/javascript"></script>
<script src="vendor/date-picker/js/datepicker.en.js" type="64cb494fb61aae9650038e02-text/javascript"></script>
<script src="js/main.js" type="64cb494fb61aae9650038e02-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="64cb494fb61aae9650038e02-text/javascript"></script>
<script type="64cb494fb61aae9650038e02-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="64cb494fb61aae9650038e02-|49" defer=""></script>

  
</body>
</html>