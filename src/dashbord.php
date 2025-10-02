<?php
include "connection.php";
$gitTotalT= "SELECT * FROM instractor";
$totalTeacher = $connect->query($gitTotalT);
$gitTotalS = "SELECT count(st_id) AS student FROM student";
$totalStudent = $connect->query($gitTotalS);
$studentAll = $totalStudent->fetch_assoc();
$commentFees = "SELECT sum(amount) AS Fess FROM payment";
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
                <div class="flex w-[80%] mx-auto justify-center items-center space-x-4 my-6 flex-wrap">
                    <div class="flex gap-2 shadow-xl h-40 flex-col flex-1 justify-center items-center bg-stone-100">
                    <i class="fa fa-chalkboard-teacher text-2xl p-3 rounded-full text-fuchsia-800 bg-fuchsia-300/30"></i>    
                    <h1 class=" font-medium text-xl text-gray-500">Total Teacher</h1>
                        <h1 class="text-3xl">
                            <?php
                            echo $totalTeacher->num_rows;
                            ?>
                        </h1>
                    </div>
                    <div class="flex gap-2 shadow-xl h-40 flex-col justify-center items-center flex-1 bg-stone-100">
                        <i class="fa fa-user-graduate text-2xl py-3 px-4 rounded-full text-blue-800 bg-blue-300/30"></i>
                        <h1 class=" font-medium text-xl text-gray-500">Total Student</h1>
                        <h1 class="text-3xl">
                            <?php
                            echo $studentAll["student"];
                            ?>
                        </h1>
                    </div>
                    <!-- div 2 endded -->
                </div>
                <div class="flex w-[80%] mx-auto justify-center items-center space-x-4 my-12 flex-wrap">
                    <div class="flex gap-2 shadow-xl h-40 flex-col flex-1 justify-center items-center bg-stone-100">
                    <i class="fa fa-wallet bg-amber-800/40 text-amber-800 text-2xl p-3 rounded-full"></i>  
                    <h1 class=" font-medium text-xl text-gray-500">Total Amount</h1>
                        <h1 class="text-3xl">
                         <?php
                         echo $totalFece["Fess"];
                         ?>
                        </h1>
                    </div>
                    <div class="flex gap-2 shadow-xl h-40 flex-col justify-center items-center flex-1 bg-stone-100">
                        <i class="fa fa-book-open text-2xl py-3 px-3 rounded-full text-yellow-400 bg-yellow-300/30"></i>
                        <h1 class=" font-medium text-xl text-gray-500">All Subject</h1>
                        <h1 class="text-3xl">
                           0
                        </h1>
                    </div>
                    <!-- div 2 endded -->
                </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>