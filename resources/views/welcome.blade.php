<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.sidebar{
    position: absolute;
    top: 0;
    left: 0;
    height: 100vh;
    width: 80px;
    background-color: #12171e;
    padding: .4rem .8rem;
    z-index: 100;
    transition: all 0.5s ease;
}

.sidebar.active ~ .main-content{
    left: 230px;
    width: calc(100% - 250px);
}

.sidebar.active{
    width: 250px;

}

.sidebar #btn{
    position: absolute;
    color: #fff;
    top: .4rem;
    left: 50%;
    font-size: 1.2rem;
    height: 50px;
    line-height: 50px;
    transform: translateX(-50%);
    cursor: pointer;
}

.sidebar.active #btn{
    left: 90%;
}

.sidebar .top .logo{
    color: #fff;
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    pointer-events: none;
    opacity: 0;
}

.sidebar.active .top .logo{
    opacity: 1;
}

.top .logo{
    font-size: 2rem;
    margin-right: 5px;
}

.user{
    display: flex;
    align-items: center;
    margin: 1rem 0;
}

.bold {
    font-weight: 600;
}
.user p {
    color: #fff;
    opacity: 1 ;
    margin-left: 1rem;
    font-size: .8rem;
}

.sidebar p {
    opacity: 0;

}
.sidebar.active p {
    opacity: 0;
    
}

.sidebar ul li {
    position: relative;
    list-style-type: none;
    height: 50px;
    width: 90%;
    margin: 0.8rem auto;
    line-height: 50px;
}

.sidebar ul li a{
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 0.8rem;
}

.sidebar ul li a:hover{
    color: #12171e;
    background-color: #fff;
}

.sidebar ul li a i{
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    line-height: 50px;
    text-align: center;
}

.sidebar .nav-item{
    opacity: 0;
    transition: all 0.5s ease;
    margin-right:20px 
}
.sidebar.active .nav-item{
    opacity: 1;
}

.sidebar ul li .tooltip{
    position: absolute;
    left: 125px;
    top: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 0.5rem 0.8rem 0 rgba(0, 0, 0, 0.2);
    border-radius: .6rem;
    padding: .4rem 1.2rem;
    line-height: 1.8rem;
    z-index: 20;
    opacity: 0;
}

.sidebar ul li:hover .tooltip{
    opacity: 1;
}

.sidebar.active ul li .tooltip{
    display: none;
}

.main-content{
    position: relative;
    background-color: #eee;
    min-height: 100vh;
    top: 0;
    left: 80px;
    transition: all 0.5s ease;
    width: calc(100% - 80px);
    padding: 1rem;
}

</style>
<body>
    <div class="sidebar">
        <div class="user">
            <div class="bold">
                <p>Admin Panel</p>
            </div>
        </div>
        <ul>
            <li>
                <a href="#">
                    <i class="bx bxs-grid-alt" id="btn">Dashboard</i>
                    <span class="nav-item"></span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-child" id="btn">Users</i>
                    <span class="nav-item"></span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-category' >Categories</i>
                    <span class="nav-item"></span>
                </a>
                <span class="tooltip">Categories</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxl-product-hunt' >Products</i>
                    <span class="nav-item"></span>
                </a>
                <span class="tooltip">Products</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-cog' >Settings</i>
                    <span class="nav-item"></span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-log-out-circle' >Logout</i>
                    <span class="nav-item"></span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="container">
            <h1>This is Admin Panel</h1>
        </div>
    </div>
</body>
<script>
    let btn=document.querySelector("#btn");
    let sidebar=document.querySelector(".sidebar");

    btn.onclick=function(){
        sidebar.classList.toggle("active");
    } 
</script>
</html>