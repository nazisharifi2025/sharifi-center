<?php
include "connection.php";
 $result = $connect->query("SELECT * from student");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $stName = $_POST["stName"];
    $stLastName = $_POST["stLastName"];
    $CommintSearch = "SELECT st_id ,st_name,st_fatherName, st_lastname  from student where st_name LIKE '%$stName%' AND st_lastname LIKE '%$stLastName%'";
    $result = $connect->query($CommintSearch);
};
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
    <script src="insertstu.js" defer></script>
    <script src="app.js" defer></script>
</head>
<body>
    <div class="h-screen overflow-y-hidden w-full bg-stone-50 flex">
        <?php
        include "SideBAr.php";
        ?>
        <!-- sideBar endded -->
        <div class="h-full w-full overflow-y-scroll scrollbar-hide">
           <?php
           include "navbar.php";
           ?>
            <!-- navbar endded -->
             <!-- content start -->
              <div class="w-full  p-12  font-medium ">
                <h1 class="text-2xl">Admin Dashbord</h1>
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Students </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">Search Students</h1>
                <form id="newForm" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" enctype = "multipart/form-data" class="w-full flex px-3 py-12 border rounded-md gap-2 " >
                    <input name="stName" type="text" placeholder="Plase Inter A Valid Student Name" class="p-3 border border-gray-500 rounded-md outline-0 w-[40%]">
                    <input name="stLastName" type="text" placeholder="Plase Inter A Valid student Fathe Name " class="p-3 border border-gray-500 rounded-md w-[40%] outline-0">
                   <button class=" py-1 h-14 px-12 text-white w-fit rounded-md bg-amber-600">Save</button>
                </form>
                <div class="w-[90%] p-6 ">
                    <table class="border border-collapse w-full">
                        <tr class="border py-4">
                            <th class="border text-center py-3">Name</th>
                            <th class="border text-center py-3">Last Name</th>
                            <th class="border text-center py-3">Father Name</th>
                            <th class="border text-center py-3">SELECT</th>
                        </tr>
                            <?php if($result->num_rows > 0){ while($row =$result->fetch_assoc()){  ?>
                            <tr class="py-2">
                                <td class="border text-center py-1.5"><?php echo $row["st_name"] ?></td>
                                <td class="border text-center py-1.5"><?php echo $row["st_lastname"] ?></td>
                                <td class="border text-center py-1.5"><?php echo $row["st_fatherName"] ?></td>
                                <td class="border text-center py-1.5"><i class="fa-solid fa-chevron-right"></i></td>
                            </tr>
                            <?php }} ?>
                    </table>
                </div>
            </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>