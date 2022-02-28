<?php

use App\Model\Entity\Category;
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'index']); ?>">Truyen.com</a>

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Thể Loại</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href=<?= $this->Url->build(['controller' => 'theloai', 'action' => 'index', 1]); ?>>Chuyển Sinh</a>
                <a class="dropdown-item" href=<?= $this->Url->build(['controller' => 'theloai', 'action' => 'index', 2]); ?>>Ác Quỷ</a>
                <a class="dropdown-item" href=<?= $this->Url->build(['controller' => 'theloai', 'action' => 'index', 3]); ?>>Lịch Sử</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Truyện Chữ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Truyện Tranh</a>
        </li>

    </ul>
    <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>">Logout</a>
        </li>
    </ul>
</nav>
