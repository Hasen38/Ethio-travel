<div class="sidebar" x-data>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="{{route('admin.users')}}">Admin Users
                <i class="fas fa-user"></i>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('admin.packages')}}">
            <i class="fas fa-cog"></i> Packages
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('admin.bookings')}}">
                <i class="fas fa-sign-out-alt"></i>Bookings
            </a>

        </li>
    </ul>
</div>

<style>
    .sidebar {
        background-color: #2c3e50;
        padding: 15px;
        width: 250px;
        height: 100vh;
        position: fixed;
    }
    .sidebar-menu {
        list-style-type: none;
        padding: 0;
    }
    .sidebar-item {
        margin: 15px 0;
    }
    .sidebar-item a {
        color: #ecf0f1;
        text-decoration: none;
        font-size: 18px;
        display: flex;
        align-items: center;
    }
    .sidebar-item a i {
        margin-right: 10px;
    }
    .sidebar-item a:hover {
        color: #3498db;
    }
</style>

<!-- Include Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
