<head>
  <style>
    /* Reset default margin and padding */
    * {
      margin: 0;
      padding: 0;
    }

    /* Style for the header */
    header {
      background-image: linear-gradient(100deg, #00ada5, #2948B1);
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    /* Style for the navigation bar */
    nav ul {
      list-style-type: none;
      display: flex;
      justify-content: left;
    }

    nav a {
      display: block;
      color: #fff;
      text-align: center;
      padding: 14px 5px;
      text-decoration: none;
      transition: padding 0.15s,
        margin 0.15s;
    }

    nav a:hover {
      background-color: #00ada5;
      color: #333;
      cursor: pointer;
      padding-left: 25px;
      padding-right: 25px;
      margin-left: 0px;
      margin-right: 0px;
    }

    nav ul li {
      margin-right: 20px;
    }

    /* Style for the profile button */
    .icon {
      background-color: #00ada5;
      padding: 10px 10px;
      border-radius: 10px;
      text-decoration: none;
      border-style: double;
      border-color: white;
      border-width: 5px;
    }

    .icon img {
      vertical-align: middle;
      max-width: 30px;
      max-height: 30px;
      transition: padding 0.15s,
        margin 0.15s;
    }

    .icon img:hover {
      cursor: pointer;
      padding-left: 25px;
      padding-right: 25px;
      margin-left: 0px;
      margin-right: 0px;
    }

    footer {
      background-image: linear-gradient(100deg, #00ada5, #2948B1);
      color: #fff;
      padding: 30px;
      text-align: center;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="logo"><img src="../layout/logoump.png" width="200" height="100"></div>
    <nav>
      <ul>
        <li><a href="#">HOMEPAGE</a></li>
        <li><a href="#">DISCUSSION BOARD</a></li>
        <li><a href="#">COMPLAINT</a></li>
        <li><a href="#">REPORT</a></li>
      </ul>
    </nav>
    <a class="icon"><img src="profile.png"></a>
  </header>

  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>
</body>