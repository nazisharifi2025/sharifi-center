<?php
include "connection.php";
$query ="SELECT i.ins_id,i.ins_name,i.ins_lastname,i.phone_num,i.degree,course.course_name,departmint.dep_name from instractor as i inner join instractorcouse on i.ins_id = instractorcouse.ins_id inner join course on course.course_id= instractorcouse.course_id inner join instractordepartmint on i.ins_id = instractordepartmint.ins_id inner join departmint on departmint.dep_id = instractordepartmint.dep_id ";
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
        <div class="h-screen w-full overflow-y-scroll ">
           <?php
           include "navbar.php";
           ?>
            <!-- navbar endded -->
             <!-- content start -->
              <div class="w-full  p-12  font-medium">
                <h1 class="text-2xl">Admin Dashbord</h1>
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Instractor </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">All Instractor</h1>
             <table class="border border-collapse w-[90%] mx-auto">
                <tr>
                    <th class="border p-1">Instractor_Id</th>
                    <th class="border p-1">Instractor_Name</th>
                    <th class="border p-1">Instractor_LastName</th>
                    <th class="border p-1">Instractor_Phone_number</th>
                    <th class="border p-1">Instractor_Degree</th>
                    <th class="border p-1">CourseName</th>
                    <th class="border p-1">Departmint_Name</th>
                </tr>
                <?php while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <td class="border p-1"><?php echo $row["ins_id"] ?></td>
                        <td class="border p-1"><?php echo $row["ins_name"] ?></td>
                        <td class="border p-1"><?php echo $row["ins_lastname"] ?></td>
                        <td class="border p-1"><?php echo $row["phone_num"] ?></td>
                        <td class="border p-1"><?php echo $row["degree"] ?></td>
                        <td class="border p-1"><?php echo $row["course_name"] ?></td>
                        <td class="border p-1"><?php echo $row["dep_name"] ?></td>
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