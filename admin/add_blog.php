<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Menu</title>
    <style>
    :root {
        --primary-color: #4a90e2;
        --bg-color: #f4f7fa;
        --text-color: #333;
        --sidebar-bg: #ffffff;
        --sidebar-hover: #e6f0ff;
    }

    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--bg-color);
        color: var(--text-color);
    }

    .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: var(--sidebar-bg);
        overflow-x: hidden;
        transition: 0.3s;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        white-space: nowrap;
    }

    .sidebar-header {
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #e0e0e0;
    }

    .sidebar-header h3 {
        margin: 0;
        font-size: 1.2em;
        color: var(--primary-color);
    }

    .toggle-btn {
        background: none;
        border: none;
        color: var(--text-color);
        font-size: 20px;
        cursor: pointer;
        transition: 0.2s;
    }

    .toggle-btn:hover {
        color: var(--primary-color);
    }

    .sidebar a {
        padding: 15px 25px;
        text-decoration: none;
        font-size: 16px;
        color: var(--text-color);
        display: flex;
        align-items: center;
        transition: 0.2s;
    }

    .sidebar a:hover {
        background-color: var(--sidebar-hover);
        color: var(--primary-color);
    }

    .sidebar a i {
        min-width: 30px;
        font-size: 20px;
    }



    .sidebar.closed {
        width: 70px;
    }

    .sidebar.closed .sidebar-header h3 {
        display: none;
    }

    .sidebar.closed a span {
        display: none;
    }

    .sidebar.closed~#main {
        margin-left: 70px;
    }

    .form-container {
        width: 70%;
        background: #fff;
        margin: 40px auto;
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);



    }

    .form-container {
        transition: margin-left .3s;
        padding: 20px;
        margin-left: 300px;
    }

    h1 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    input,
    textarea {
        width: 95%;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    input:focus,
    textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    textarea {
        resize: none;
    }

    .submit-btn {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background: #0056b3;
    }

    @media screen and (max-width: 768px) {
        .sidebar {
            width: 70px;
        }

        .sidebar .sidebar-header h3 {
            display: none;
        }

        .sidebar a span {
            display: none;
        }

        #main {
            margin-left: 70px;
        }

        .sidebar.open {
            width: 250px;
        }

        .sidebar.open .sidebar-header h3 {
            display: block;
        }

        .sidebar.open a span {
            display: inline;
        }

        .sidebar.open~#main {
            margin-left: 250px;
        }
    }
    </style>
    </head>

    <body>
        <!--- sidebar content--->
        <div id="mySidebar" class="sidebar">
            <div class="sidebar-header">
                <h3>Menu</h3>
                <button class="toggle-btn" onclick="toggleNav()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <a href="add_blog.php"><i class="fas fa-home"></i> <span>Add Blog</span></a>
            <a href="#"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a>
            <a href="#"><i class="fas fa-user"></i> <span>Profile</span></a>
            <a href="#"><i class="fas fa-envelope"></i> <span>Messages</span></a>
            <a href="#"><i class="fas fa-cog"></i> <span>Settings</span></a>
        </div>


        <!--- Main content--->
        <div class="form-container">

            <?php
        include('connection.php');
        error_reporting(0);
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            $title = $_POST['title'];
            $meta_des = $_POST['meta_des'];
            $description = $_POST['description'];
            $location = $_POST['location'];
            $main_img = $_FILES['main_img'];
            $main_img_path = '';
            if ($main_img['error'] === 0) {
                $main_img_path = "../uploads/" . basename($main_img['name']);
                move_uploaded_file($main_img['tmp_name'], $main_img_path);
            }

            $other_images = [];
    if (!empty($_FILES['other_img']['name'][0])) { // Ensure at least one file is uploaded
        foreach ($_FILES['other_img']['tmp_name'] as $key => $tmp_name) {
            if ($_FILES['other_img']['error'][$key] === 0) {
                $file_name = basename($_FILES['other_img']['name'][$key]);
                $file_path = "../uploads/" . $file_name;
                move_uploaded_file($tmp_name, $file_path);
                $other_images[] = $file_path; // Add the file path to the array
            }
        }
    }
    $other_images_str = implode(',', $other_images); // Convert the array to a comma-separated string

    $sql = "INSERT INTO blogs(title,meta_desc,description,location,main_img,other_img)VALUES('$title','$meta_des','$description','$location','$main_img_path','$other_images_str')";
    $result = $conn->query($sql);
    if($result){
        echo"<script>alert('inserted successfully!');</script>";
    }else{
        echo"Error: " . $conn->error;
    }

        }

        ?>
            <h1>Add a New Blog</h1>
            <form action="add_blog.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Blog Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter blog title" required>
                </div>

                <div class="form-group">
                    <label for="meta_desc">Meta Description</label>
                    <textarea id="meta_desc" name="meta_desc" placeholder="Write your blog description" rows="5"
                        required></textarea>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Write your blog description" rows="5"
                        required></textarea>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" placeholder="Enter blog location" required>
                </div>

                <div class="form-group">
                    <label for="main_image">Main Image</label>
                    <input type="file" id="main_image" name="main_img" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label for="other_images">Other Images</label>
                    <input type="file" id="other_images" name="other_img[]" accept="image/*" multiple>
                </div>

                <button type="submit" class="submit-btn">Add Blog</button>
            </form>
        </div>



        <script>
        function toggleNav() {
            const sidebar = document.getElementById("mySidebar");
            const main = document.getElementById("main");
            sidebar.classList.toggle("closed");
            if (window.innerWidth <= 768) {
                sidebar.classList.toggle("open");
            }
        }
        </script>

    </body>

</html>