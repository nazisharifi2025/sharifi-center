<?php
include "connection.php";
$query ="SELECT s.st_id,s.st_name,s.st_lastName,s.tazkira_num,s.fec_paid,c.course_name from student as s inner join coursestudent on s.st_id = coursestudent.student_id inner join course as c on c.course_id = coursestudent.course_id";
$result = $connect->query($query);
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
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>All Student </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">All Student</h1>
             <table class="border border-collapse w-[90%] mx-auto">
                <tr>
                    <th class="border p-1">Student_Id</th>
                    <th class="border p-1">Student_Name</th>
                    <th class="border p-1">Student_LastName</th>
                    <th class="border p-1">Student_IdCard</th>
                    <th class="border p-1">Student_Fee</th>
                    <th class="border p-1">CourseName</th>
                </tr>
                <?php while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <td class="border p-1"><?php echo $row["st_id"] ?></td>
                        <td class="border p-1"><?php echo $row["st_name"] ?></td>
                        <td class="border p-1"><?php echo $row["st_lastName"] ?></td>
                        <td class="border p-1"><?php echo $row["tazkira_num"] ?></td>
                        <td class="border p-1"><?php echo $row["fec_paid"] ?></td>
                        <td class="border p-1"><?php echo $row["course_name"] ?></td>
                    </tr>

                    <?php } ?>
             </table>
            </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>