<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_SESSION['id'])) {
    $db_connection = new PDO('mysql:host=localhost;dbname=auth_system', 'todo','todo');

    if(isset($_POST['submit'])){
        if(!empty($_POST['comment'])){
            $comment = $db_connection->prepare("INSERT INTO comments(comment, user_id) VALUES (?,?)");
            if($comment->execute(array(($_POST['comment']),$_SESSION['id']))){
                echo "
                    <script>
                        alert('Merci d\' avoir laisser votre avis')
                    </script>
                ";
            } else {
                echo " <script> alert ('Ouups desole une erreur est survenue lors de l'enregistrement de votre avis!!.Merci d'essayer plus tard!') </script> ";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temoniages</title>
</head>
<body>
<div id="main" style="background: linear-gradient(135deg, #cf9aff, #95c0ff)" class="shadow-black shadow-xl p-2.5 w-5/6 flex flex-col mx-auto items-center justify-center place-items-center h-fit text-white border-2 border-slate-800">
        <h1 class="text-3xl">Comments</h1>
        <div class="comments m-5 w-full pr-2 flex flex-col justify-end">

        </div>
        
        <div class="flex items-center w-11/12  border-1 rounded-full transition-all duration-700 ">
            <form method="POST">
                <div class="w-full">
                    <input class="w-full text-black bg-slate-200 font-[14] h-full rounded-full outline-none border-none p-4 hidden transition-[display] duration-700" type="text" name="comment" placeholder="Votre avis...">
                </div>
                
                <input value="comment" name="submit" type="submit" id="commentBtn" class="hover:bg-slate-200 h-12 w-12 cursor-pointer hover:px-2 rounded-full transition-all duration-750" ><img class="h-10 w-10 p-2" src="icons/chat_bubble_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg" alt=""></input>
            </form>
        </div>
     </div>
    <script>
        let textArea = document.querySelector('input');
        let commentBtn = document.getElementById('commentBtn');
        let main
        function inputBg(){
            if(textArea.classList.contains('hidden')){
                textArea.parentElement.parentElement.classList.remove('bg-slate-200');
            } else {
                textArea.parentElement.parentElement.classList.add('bg-slate-200');   
            }
        }
        
        commentBtn.addEventListener('click',()=>{
            textArea.classList.toggle('hidden');
            inputBg();
        })

        textArea.addEventListener('keypress',(e)=>{
            if(e.key === "Enter"){
                let comment = document.createElement('div');
                comment.classList.add('bg-slate-200', 'text-black', 'h-12', 'p-4', 'mb-2');
                comment.innerHTML = textArea.value;
                console.log(textArea.value);
                commentSection = document.querySelector('.comments');
                console.log(comment);
                commentSection.append(comment);
                textArea.value = '';
            }
            // console.log(e);
        })
    </script>
</body>
<?php }else {
    $error_msg = "Vous devez vous connecter pour accéder à cette page.";
    header("Location: index.php?error=" . urlencode($error_msg));
} ?>
</html>