<?php
//  very archaic solution to making external styles work with bootstrap
function init_style()
{
?>

<style>
@font-face {
    font-family: Montserrat-semibold;
    src: url("fonts/Montserrat-SemiBold.ttf");
}
@font-face {
    font-family: Montserrat-regular;
    src: url("fonts/Montserrat-Regular.ttf");
}
@font-face {
    font-family: Montserrat-bold;
    src: url("fonts/Montserrat-Bold.ttf");
}
body {
    background-color: #243447;
    font-family: Montserrat-regular;
}

.custom-nav {
    background-color: white;
    color: #B2BAC4;
    font-family: Montserrat-semibold;
}

.custom-semi {
    font-family: Montserrat-semibold;
}

.custom-title{
    font-family: Montserrat-bold;
}
.custom-text{
    font-family: Montserrat-regular;
}

.modal-title{
    font-family: Montserrat-bold;
}

.modal-body{
    font-family: Montserrat-regular;
}

html {
    font-family: Montserrat-regular;
}
.table-head-custom{
    background-color: #F6FAFF;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #F6FAFF;
}

.table-striped > tbody > tr:nth-child(even) > td,
.table-striped > tbody > tr:nth-child(even) > th {
  background-color: #FFFFFF;
}

.lgreen {
    border: none;
    font-family: Montserrat-semibold;
    color: #000000;
    background-color: #66FFCA;
}

.lred {
    border: none;
    font-family: Montserrat-semibold;
    color: #000000;
    background-color: #FF9792;
}

.lblue {
    border: none;
    font-family: Montserrat-semibold;
    color: #000000;
    background-color: #72d2f7;
}

.nav-link.clickable {
    cursor: pointer;
}

.hover {
    background-color:#F8F9FA;
    transition: 0.3s;
}

.hover:hover {
    background-color:#B2BAC4;
    transition: 0.3s;   
}

.logincontent {
    background-color:#F8F9FA;
    border-radius:15px;
}

.main-container {
    background-color:#F8F9FA;
    border-radius:15px;
}

.lgreen {
    border: none;
    color: #000000;
    background-color: #66FFCA;
}

.lred {
    border: none;
    color: #000000;
    background-color: #FF9792;
}

.lblue {
    border: none;
    color: #000000;
    background-color: #72d2f7;
}

.white{
    color: #FFFFFF;
}

</style>

<?php
}
?>