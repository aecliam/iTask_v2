<html lang="en" dir="ltr">
    <head>

        <meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/sidebar.css"/>

        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="sidebar open">
            <div class="logo-details">
                <i class='bx bx-menu'></i>
                <span class="logo_name">TECH EDGE INC.</span>
            </div>

            <ul class="nav-links">
                <li>
                    <a href="index.php">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>

                    <hr>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="index.php">Dashboard</a></li>
                        </ul>
                </li>

                <li>
                    <div class="iocn-link">
                        <a href="./index.php?page=project_list">
                            <i class='bx bx-collection'></i>
                            <span class="link_name" href="./index.php?page=project_list">Projects</span>
                        </a>

                        <!--i class='bx bxs-chevron-down arrow'></i-->
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="./index.php?page=project_list">Projects</a></li>
                        <!--li><a href="./index.php?page=n_project">Add Project</a></li>
                        <!--li><a href="./index.php?page=project_list">View Projects</a></li>
                        <!--li><a href="manager_pending_project.php">Pending Projects</a></li-->
                    </ul>
                </li>

                <li>
                    <a href="./index.php?page=task_list">
                        <i class='bx bxs-pin'></i>
                        <span class="link_name">Tasks</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="./index.php?page=task_list">Tasks</a></li>
                    </ul>
                </li>

                <li>
                    <a href="./index.php?page=calendar">
                        <i class='bx bx-calendar'></i>
                        <span class="link_name">Calendar</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="./index.php?page=calendar">Calendar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="./index.php?page=inbox">
                        <i class='bx bx-message'></i>
                        <span class="link_name">Inbox</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="./index.php?page=inbox">Inbox</a></li>
                    </ul>
                </li>

                <!--li>
                    <a href="./index.php?page=conference">
                        <i class='bx bxs-video'></i>
                        <span class="link_name">Conference</span>
                    </a>
                        <ul class="sub-menu blank">
                        <li><a class="link_name" href="./index.php?page=conference">Conference</a></li>
                    </ul>
                </li-->
                
                <hr>
                    <li>
                        <div class="iocn-link">
                            <a href="./index.php?page=user_list">
                                <i class='bx bxs-user-account'></i>
                                <span class="link_name" href="./index.php?page=user_list">Users</span>
                            </a>

                            <!--i class='bx bxs-chevron-down arrow'></i-->
                        </div>

                        <ul class="sub-menu">
                            <li><a class="link_name" href="./index.php?page=user_list">Users</a></li>
                            <!--li><a href="./index.php?page=new_user">Add User</a></li>
                            <li><a href="./index.php?page=user_list">View Users</a></li>-->
                        </ul>
                    </li>

                    <li>
                        <a href="./index.php?page=archive">
                            <i class='bx bx-archive'></i>
                                <span class="link_name">Archives</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="./index.php?page=archive">Archives</a></li>
                        </ul>
                    </li>

                    <!--div class="profile-details">
                        <div class="profile-content">
                            <!--<img src="image/profile.jpg" alt="profileImg">
                        </div>
                        <div class="name-job">
                            <div class="profile_name">NAME</div>
                            <div class="job">POSITION</div>
                        </div>
                            <a href="login.php" class='bx bx-log-out'></a>
                    </div-->                    
                </hr>
            </ul>
        </div>
                    
        <!--section class="home-section"-->
            <div class="home-content">
            <!--i class='bx bx-menu' ></i-->
            <!--span class="text">Drop Down Sidebar</span-->
            </div>
        </section>
        
        <script>
            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
                let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
                    });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });
        
        </script>
    </body>
</html>
