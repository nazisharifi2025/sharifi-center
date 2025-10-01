<?php
include "connection.php";
if(isset($_POST["stFee"])){
    $stName = $_POST["stName"];
    $stLastName = $_POST["stLastName"];
    $stIdCard = $_POST["stIdCard"];
    $stPhone = $_POST["stPhoneNum"];
    $stFee = $_POST["stFee"];
    $Result = $connect->query("SELECT st_name,st_lastName,tazkira_num FROM student where st_name = '$stName' and st_lastName= '$stLastName' and tazkira_num = '$stIdCard'");
    if($Result->num_rows > 0){
        echo "<script>alert('Sorrey the student is alredy')</script>";
}
else{
     $resultinsert =("INSERT INTO student(st_name,st_lastName,tazkira_num,phone_num,fec_paid) VALUES('$stName','$stLastName','$stIdCard','$stPhone','$stFee') ");
     $result= $connect->query($resultinsert);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../public/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="app.js" defer></script>
</head>
<body>
    <div class="h-screen overflow-y-hidden w-full bg-stone-50 flex">
        <?php
        include "SideBAr.php";
        ?>
        <!-- sideBar endded -->
        <div class="h-screen w-full ">
           <?php
           include "navbar.php";
           ?>
            <!-- navbar endded -->
             <!-- content start -->
              <div class="w-full  p-12  font-medium">
                <h1 class="text-2xl">Admin Dashbord</h1>
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Students </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">Add Students</h1>
                <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" class="w-[80%] grid grid-cols-2 px-3 py-12 border rounded-md gap-6 ">
                    <input name="stName" type="text" placeholder="Plase Inter A Valid Student Name" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stLastName" type="text" placeholder="Plase Inter A Valid Student LastName " class="p-3 h-14 border border-gray-500 rounded-md outline-0">
                    <input name="stIdCard" type="text" placeholder="Plase Inter A Valid Student Tazkira Number" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stPhoneNum" type="text" placeholder="Plase Inter A Valid Student Phone Number" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stFee" type="number" placeholder="Plase Inter A Valid student Fee" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input type="submit" value="Save" class=" py-1 h-14 px-12 mx-auto w-fit rounded-md bg-amber-600">
                </form>
            </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>