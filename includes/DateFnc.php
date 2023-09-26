<?php
function getCurrDateDMY()
{
    return date('F-d-Y');
}
function getCurrMonthName()
{
    $curmonthname = date_create(getCurrDateDMY());
    return date_format($curmonthname,'F');
}

function getCurrMonthNameShort()
{
    $curmonthnameshort = date_create(getCurrDateDMY());
    return date_format($curmonthnameshort,'M');
}function getCurrentMonthNumber()
{
    $curmonthnumber = date_create(getCurrDateDMY());
    return date_format($curmonthnumber,'m');
}
function getCurrYear()
{
    $curryr = date_create(getCurrDateDMY());
    return date_format($curryr,'Y');
}
function dateToStdMY()
{
    $currdate = date_create(getCurrDateDMY());
    return date_format($currdate,"F Y");
}
?>