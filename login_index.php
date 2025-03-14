<?php
session_start();

$db_connection = new PDO('mysql:host=localhost;dbname=auth_system', 'todo','todo');


if (isset($_SESSION['id'])) {
    $getid = intval($_GET['id']);
    $requser = $db_connection->prepare("SELECT * FROM users WHERE id = ?");
    $requser->execute(array($getid));
    $user_info = $requser->fetch();

    $user_info['email'];
    $user_info['password'];
    $user_info['firstname'];
    $user_info['lastname'];
    $user_info['telephone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<style>
   :root{

    --main-color : #00ffee;
    }

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins','Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }

    .w-75{
    width: 90%;
    }
    .mx-auto{
    margin: 0 auto;
    }

    a{
    text-decoration: none;
    color: #fff;
    font-size: 1.5em; 
    }

    a:active{
    color: var(--main-color);
    }

    .z-10{
    z-index: 10;
    }

    .w-full{
    width: 100%;
    }

    .w-screen{
    width: 100vw;
    }

    .h-scrren{
    height: 100vh;
    }

    .fixed{
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    }

    header nav{
    padding: 2rem 4rem;
    }
    ul li a{
    margin-left: 1rem;
    transition: all 0.2s ease-in;
    }

    ul li a:hover{
    border-bottom: 1px solid var(--main-color);
    transform: scale(1.2,1.2);
    text-shadow: 0px 10px 25px var(--main-color);
    color: var(--main-color);

    }

    .blur{
    backdrop-filter: blur(10px);
    }

    .bg-black{
    background-color: #000;
    }

    .text-white{
    color: #fff;
    }

    .text-main-color{
    color: var(--main-color);
    }

    .flex{
    display: flex;
    }

    .flex-col{
    display: flex;
    flex-direction: column;
    margin-bottom: 5px;
    }

    .justify-center{
    justify-content: center;
    }

    .justify-between{
    justify-content: space-between;
    }

    .items-center{
    align-items: center;
    }

    .p-3{
    padding: 2em;
    }

    .mb-1{
    padding: 1em;
    }

    .font-bold{
    font-weight: 800;
    }

    .shadow{
    text-shadow: 0px 0 25px var(--main-color);
    }

    #main{
    display: grid;
    grid-template-columns: repeat(2, minmax(0,1fr));
    gap:1rem
    }

    .grid-2{
    display: grid;
    grid-template-columns: repeat(2,minmax(0,1fr));
    gap: 10px;
    }

    .gap-2{
    gap: 4px;
    }

    #main h1:hover{
    transform: scale(1.1,1.1);
    transition: all 0.3 ease-in-out;
    cursor: pointer;
    }

    .flex-1{
    flex:1;
    }

    .error{
    color: red;
    font-size: small;
    padding: 5px;
    }


    #main img{
    border-radius: 50%;
    width: 300px;
    height: 300px;
    box-shadow: 0px 0 10px var(--main-color);
    }

    #main img:hover{
    cursor: pointer;
    transform: scale(1.3);
    box-shadow: 0px 0 25px var(--main-color);
    }

    .list-none{
    list-style-type: none;
    }

    .text-center{
    text-align: center;
    }

    .bg-white{
    background-color: white;
    color: #000;
    }
    .test{
    text-decoration: underline; 
    cursor: pointer; 
    color: #61686B; 
    font-size: 16px;
    transition: all 0.3s;
    }

    .test:hover{
    color: #0da9f1;
    transform: scale(1.1,1.2);
    }

    .field{
    outline: none;
    border-radius: 6px;
    border-color: #E8F0FE;
    padding: 8px 12px;
    background-color: #E8F0FE;
    }

    .submit{
    margin-bottom: 16px;
    margin-top: 16px;
    padding: 8px 16px;
    width: 100%;
    background-color: #0074AA;
    border-radius: 4px;
    outline: none;
    border: none;
    cursor: pointer;
    }


    .cards img{
    height: 48px;
    width: 48px;
    border-radius: 50%;
    }

    .flex-end{
    justify-content: end;
    }

    .container {
    width: 800px;
    margin: 0 auto;
    overflow: hidden;
    }

    .slider {
    display: flex;
    flex-wrap: nowrap;
    animation: slide 60s linear infinite; /* Durée de l'animation : 60 secondes */
    }

    .slider img {
    width: 200px;
    height: 150px;
    margin: 10px;
    border: 1px solid #ccc;
    }

    @keyframes slide {
    0% {
    transform: translateX(0);
    }
    100% {
    transform: translateX(-1600px); /* Déplacement total : 1600px */
    }
    }

    .w-11{
    width:2.9rem
    } 
    .h-11{
    height: 2.9rem;
    } 

    .bg-transparent{
    background-color: transparent;
    } 
    footer+div+a:hover{
    box-shadow: 0px 0 25px var(--main-color);
    border-radius: 50%;
    }

    .mt-5{
    margin-top: 2.5rem;
    }

    .mb-5{
    margin-bottom: 2.5rem;
    }

    footer{
    margin-bottom: 0px;
    background-color: #131313;
    }

    footer div a svg{
    transform: all;
    fill: var(--main-color);
    cursor: pointer;
    border-radius: 50%;
    border: 2px solid var(--main-color);
    }

    footer div a svg:hover{
    transform: scale(1.3,1.3);
    translate: (0.25rem);
    background-color: var(--main-color);
    fill: #fff;
    box-shadow: 0px 0 25px var(--main-color);
    }

    .footer-links a{
    padding: 5px 0px;
    transition: all 0.4s ease-in-out;
    }

    .footer-links a:hover{
    border-bottom: 2px solid var(--main-color);
    color: var(--main-color);
    }

    .inline-flex{
    display: inline-flex;
    }

    .gap-5{
    gap: 2.5rem;
    }

    .p-1{
    padding: 0.25rem;
    }

    .rounded-sm{
    border-radius: 20px;
    }

    input{
    border: none;
    }

    .indicatif{
    border: none;
    outline: none;
    border-radius: 6px;
    border-color: #E8F0FE;
    padding: 8px 12px;
    background-color: #E8F0FE;
    border-right: 2px solid gray;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;
    }

    .card {
    background-color: white;
    width: 400px;
    border: 1px solid lightgray;
    border-radius: 10px;
    height: fit-content;
    padding: 10px;
    }

    .cards img{
    height: 48px;
    width: 48px;
    border-radius: 50%;
    }
    .card .avatar {
    width: 100%;
    padding: 10%;
    padding-bottom: 0;
    }

    .card .name {
    margin-block: 13px;
    color: var(--main-color);
    flex-grow: 1;
    }

    .card .info {
    padding: 10px;
    }

    .card .favorite {
    width: 25px;
    cursor: pointer;
    }

    .card .contact {
    font-size: 0.75rem;
    color: gray;
    margin-block: 7px;
    }

    .card .favorite-button {
    border: none;
    background: transparent;
    }

    .card .favorite-button:active {
    transform: none;
    box-shadow: none;
    }

    .hidden{
    display: none;
    }

    .button{
    cursor: pointer;
    color: #0da9f1;
    justify-content:center;
    gap: 10px;
    border-radius: 10px;
    padding: 10px;
    }

    .button a {
        color: black;
        font-size: small;
    }

    .mybutton {
        transition: all 0.3s
    }


    .mybutton:hover {
        background-color: black;
        transform: scale(1.2,1.2);
        color: white;
    }

    .mybutton:hover {
        background-color: black;
        transform: scale(1.2,1.2);
        color: white;
    }


    .mybutton:hover a{
        color: white;
    }

    .star img{
        height: 48px;
        width: 48px;
    }
    /* transform-all hover:scale-[1.3] hover:-translate-y-1 dark:fill-white cursor-pointer fill-black hover:fill-[var(--main-color)] border-2 border-[var(--main-color)] rounded-full p-1 w-11 h-11 */
</style>
<body>
    <article class="card mx-auto">
        <img src="assets/user.png" class="avatar" alt="User profile picture of "/>
        <div class="info">
            <div class="star flex justify-center">
                <a style="color:black; cursor:pointer;" href=<?php echo "comments.php?id=".$_SESSION['id'];?>>COmments</a>
                <h2 class="name">
                <?php echo "Bienvenue " .$user_info['firstname']. " " .$user_info['lastname'];?>
                </h2>
                <button style="cursor: pointer;" class="favorite-button" onclick="toggleFavorite()">
                    <img id="empty" class="" src="assets/star-empty.png" alt="" >
                    <img id="full" class="hidden" src="assets/star-filled.png" alt="" >
                </button>
            </div>
            <p class="contact">Telephone: +237 <?php echo $user_info['telephone']; ?></p>
            <p class="contact">Mail : <?php echo $user_info['email']; ?></p>
        </div>
        <div class="flex button">
            <button class="button mybutton"><a href=<?php echo "edit.php?id=".$_SESSION['id'] ?> >Modifier le profil</a></button>
            <button class="button mybutton"><a href="logout.php">Logout</a></button>
        </div>
    </article>
</body>
<?php }else {
    $error_msg = "Vous devez vous connecter pour accéder à cette page.";
    header("Location: index.php?error=" . urlencode($error_msg));
} ?>
<script>

    let full = document.getElementById("full");
    let empty = document.getElementById("empty");

    console.log(full);
    console.log(empty);
    function toggleFavorite(e) {
        full.classList.toggle("hidden");
        empty.classList.toggle("hidden");
    }
</script>
</html>