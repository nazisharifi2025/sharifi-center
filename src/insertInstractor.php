<?php
include "connection.php";
$gitTotalT= "SELECT * FROM instractor";
$totalTeacher = $connect->query($gitTotalT);
$gitTotalS = "SELECT count(st_id) AS student FROM student";
$totalStudent = $connect->query($gitTotalS);
$studentAll = $totalStudent->fetch_assoc();
$commentFees = "SELECT sum(fec_paid) AS Fess FROM student";
$result = $connect->query($commentFees);
$totalFece = $result->fetch_assoc();
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
              <div class="w-full text-2xl p-12  font-medium">
                <h1>Admin Dashbord</h1>
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Home </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">Add Instractor</h1>
                <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" class="w-[80%] grid grid-cols-2 px-3 py-12 border rounded-md gap-6 ">
                    <input name="depName" type="text" placeholder="Plase Inter A Valid Departmint" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="depName" type="text" placeholder="Plase Inter A Valid Departmint" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="depName" type="text" placeholder="Plase Inter A Valid Departmint" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="depName" type="text" placeholder="Plase Inter A Valid Departmint" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input type="submit" value="Save" class=" py-2 px-6 rounded-md bg-amber-600">
                </form>
            </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>