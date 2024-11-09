<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            width: 230px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1032;
            overflow-y: auto;
            background-color: #23272A; /* Darker color for the sidebar */
            color: #FFFFFF; /* Text color */
            transition: transform 0.3s ease-in-out; /* Use transform for smoother animation */
            transform: translateX(0); /* Default position */
        }

        .sidebar.active {
            transform: translateX(-230px); /* Off-screen position when collapsed */
        }

        .sidebar-header {
            padding: 20px;
            color: #FFFFFF; /* Logo text color */
            text-decoration: none;
        }

        .sidebar-logo {
            font-size: 1.5rem;
            color: #FFFFFF; /* Logo text color */
            text-decoration: none;
        }

        .nav-link {
            padding: 15px 20px; /* Increased padding */
            color: #FFFFFF; /* Sidebar links text color */
            text-decoration: none;
        }

        .nav-link:hover {
            background-color: #2C2F33; /* Darker color on hover */
        }

        .material-icons {
            margin-right: 0px;
            vertical-align: middle;
        }

        .sidebar-toggle {
            position: fixed;
            top: 10px;
            left: 230px; /* Align with the sidebar when it is open */
            cursor: pointer;
            background-color: #23272A;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: left 0.3s ease-in-out; /* Smooth transition for position change */
        }

        .sidebar.active + .sidebar-toggle {
            left: 0; /* Align with the sidebar when it is closed */
        }

        .sidebar-toggle i {
            font-size: 24px;
            color: #FFFFFF; /* Toggle button icon color */
        }

        .sidebar-text {
            font-size: 18px;
            margin-left: 10px;
            color: #FFFFFF;
        }

        .sidebar-content {
            display: block;
        }

        .sidebar.active .sidebar-content,
        .sidebar.active .sidebar-logo {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-230px); /* Default to hidden on mobile */
            }
            .sidebar.active {
                transform: translateX(0); /* Slide in on toggle */
            }
            .sidebar-toggle {
                top: 10px;
                left: 10px; /* Always visible on mobile */
            }
        }
    </style>
</head>
<body>

<div id="sidebar" class="sidebar">
    <div>
        <h2 class="sidebar-logo text-center">
            <span class="sidebar-text">Dashboard</span>
        </h2>
    </div>

    <div class="sidebar-wrapper flex-wrap flex-column">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('analysis') }}">
                    <i class="material-icons">analytics</i>
                    <span class="sidebar-text">Analytics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user') }}">
                    <i class="material-icons">person</i>
                    <span class="sidebar-text">User List</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-create') }}">
                    <i class="material-icons">person_add</i>
                    <span class="sidebar-text">Add User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-view-devices') }}">
                    <i class="material-icons">devices</i>
                    <span class="sidebar-text">Devices List</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="material-icons">logout</i>
                    <span class="sidebar-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="sidebar-toggle" id="sidebar-toggle">
    <i class="material-icons">menu</i>
</div>

<script>
    $(document).ready(function() {
        $('#sidebar-toggle').click(function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>

</body>
</html>
