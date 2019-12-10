<?php

session_start();
include '../../../Config/ConnectionObjectOriented.php';
include '../../../Config/DB.php';
include '../../../Config/Configuration.php';
$db = new DB($conn);

$searchdate = $db->getIndianDate();
if (isset($_GET["search_date"])) {
    $searchdate = $_GET["search"];
}
$users = $db->select("user", "*", array("role" => "employee"));
$garray = array();
$i = 0;
while ($user = $users->fetch_assoc()) {
    $larray = array();

    if (!empty($_GET["search"])) {
        $sql = "select count(id) as ctotal from task where user_id=" . $user['id'] . " and status='completed' and date(date_time)='$searchdate'";
    } else {
        $sql = "select count(id) as ctotal from task where user_id=" . $user['id'] . " and status='completed'";
    }
    $ctasks = $conn->query($sql);
    $ctask = $ctasks->fetch_assoc();

    if (!empty($_GET["search"])) {
        $sql = "select count(id) as ptotal from task where user_id=" . $user['id'] . " and status='pending' and date(date_time)='$searchdate'";
    } else {
        $sql = "select count(id) as ptotal from task where user_id=" . $user['id'] . " and status='pending'";
    }

    $ptasks = $conn->query($sql);
    $ptask = $ptasks->fetch_assoc();

    if (!empty($_GET["search"])) {
        $sql = "select * from attendance where user_id=" . $user["id"] . " and date(login_date)='$searchdate' ";
    } else {
        $sql = "select * from attendance where user_id=" . $user["id"] . " and login_date='" . $db->getIndianDate() . "'";
    }
    $attendances = $conn->query($sql);
    $attendance = $attendances->fetch_assoc();

    if (!empty($_GET["search"])) {
        $sql = "select count(*) as ltotal from live_location where user_id=" . $user["id"] . " and id in (select max(id) from live_location) and date(date_time)='$searchdate'";
    } else {
        $sql = "select count(*) as ltotal from live_location where user_id=" . $user["id"] . " and id in (select max(id) from live_location)";
    }
    $live_locations = $conn->query($sql);
    $live_location = $live_locations->fetch_assoc();

    $larray["id"] = $user["id"];
    $larray["name"] = $user["name"];
    $larray["ctotal"] = $ctask["ctotal"];
    $larray["ptotal"] = $ptask["ptotal"];
    $larray["ltotal"] = $live_location["ltotal"];
    $larray["logout_time"] = $attendance["logout_time"];
    $larray["login_time"] = $attendance["login_time"];
    $garray[$i] = $larray;
    $i++;
}
$string = json_encode($garray, JSON_UNESCAPED_SLASHES);
echo $string;
