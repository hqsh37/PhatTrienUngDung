<?php
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <title>Money Care</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <header>
  <nav class="navbar navbar-expand-lg navbar-light ct-header">
    <a class="navbar-brand" href="?page=index">
      <img
        class="logo"
        width="150px"
        height="80px"
        src="img/logo.png"
        alt="logo"
      />
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="?page=home">
            <button class="btn btn-outline-secondary ct-font">Trang Chủ</button>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=taikhoan">
            <button class="btn btn-outline-secondary ct-font">Tài Khoản</button>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=thuchi">
            <button class="btn btn-outline-secondary ct-font">
              QL Thu Chi
            </button>
          </a>
        </li>
        <li class="nav-item dropdown">
          <button class="btn btn-outline-secondary ct-font">
            Báo Cáo
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item nav-link" href="?page=phantichchitieu">Phân Tích Chi Tiêu</a>
            <a class="dropdown-item nav-link" href="#">Another action</a>
            <a class="dropdown-item nav-link" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=canhbao">
            <button class="btn btn-outline-secondary ct-font">
              Cảnh Báo Chi Tiêu
            </button>
          </a>
        </li>
        <li class="nav-item dropdown">
          <button class="btn btn-outline-secondary ct-font">
            Chức Năng Khác
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item nav-link" href="?page=kehoachduthu">Kế Hoạch Dự Thu</a>
            <a class="dropdown-item nav-link" href="#">Another action</a>
            <a class="dropdown-item nav-link" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="user">
      <div class="ct-name">
        <p>Hoang Quang Sang</p>
      </div>
      <div class="avt">
        <img src="img/icon/user.png" alt="logo" />
      </div>
    </div>
  </nav>
</header>
        <div class="body">