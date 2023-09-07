<?php require_once('db_connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calendar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <style>
        

        html, body{
            height: 100%;
            width: 100%;
            font-family: 'Poppins';
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #ffffff;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #8B8B8B !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            // Fetch projects from the database
            $.ajax({
                url: 'fetch_projects.php',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var projects = response.projects;

                    // Initialize the calendar
                    $('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        events: projects
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    </script>
</head>

<body class="bg-light">

    <div>

    <link rel="stylesheet" href="calendar.css">
        <!--wag tanggalin para naka center yung calendar-->
    </link>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">

            <div>
                <b class="text-light"><br></b>
            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <!--h5 class="card-title">Schedule Form</h5-->
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <!--form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="assign" class="control-label">Assign to</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="assign" id="assign" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="role" class="control-label">Role</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="role" id="role" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="priority" class="control-label">Priority</label>
                                    <select name="priority" class="form-control form-control-sm rounded-0" id=priority required>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select-->
                                    <!--
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <!--div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div-->
                <!--div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                            <dt class="text-muted">Assigned to</dt>
                            <dd id="assign" class=""></dd>
                            <dt class="text-muted">Role</dt>
                            <dd id="role" class=""></dd>
                            <dt class="text-muted">Priority</dt>
                            <dd id="priority" class=""></dd>
                        </dl>
                    </div>
                </div-->
                <!--div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div-->
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

    <?php 
    include "manager_sidebar.php";
    include "connection.php";

        $schedules = $conn->query("SELECT * FROM `project_list`");
        $sched_res = [];

        foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
            $row['start_date'] = date("F d, Y h:i A",strtotime($row['start_date']));
            $row['end_date'] = date("F d, Y h:i A",strtotime($row['end_date']));
            $sched_res[$row['id']] = $row;
        }

        if(isset($conn))$conn->close();
    ?>

</body>

<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>