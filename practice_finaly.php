<?php
	/* Задание №1.
	 * Добро пожаловать в матрицу. Всё что нам остается пользоваться ей и подстраивать под 
	 * себя и нам нужна программа, которая будет выявлять новичков и профи, хотя бы по первым * признакам.
	 *
	 * Ваша задача:
	 * Нам нужна программа, которая будет принимать на вход два числа и если пользователь 
	 * введёт 1, то его будет приветствовать доброжелательное письмо, если нет, то будет 
	 * отводить от входа к дальнейшему изучению программирования.
	 */
	 ?>
	 <style>
	  *{
	 	text-align:center;
		color:#f8f8f8;
		background:blue;
		margin-top:15px;
	   }
    input{
		border-radius:5px;
		background-color:white;
		text-align:left;
		color:black;
		margin:0;
	   }
	button{
		border-radius:5px;
		font-weight:bold;
	   }
	</style>
<?php
	if (isset($_POST["question_1"])){
		if (($_POST["question_1"] !== "1") && ($_POST["question_1"] !== 'declare(strict_types=1)')){
			header("Location: https://www.php.net/manual/ru/language.types.declarations.php#language.types.declarations.strict");			
		}else if($_POST["question_2"] !== "1"){
			header("Location: https://www.php.net/manual/ru");
		}else{
			echo "<h1>Поздравляю Вы ответили правильно!</h1>
			<h3>Для вас будет доступен новый ресурс. </h3>
			<a href='https://floating-anchorage-14927.herokuapp.com'> Перейти на планировщик задач Trello.</a>
			";
		}
	}	
	else{
	echo '
	
	<h1> Здравствуй мой дорогой друг! </h1>
	<h2> Для дальнейшего прохождения необходимо ответить на 2 вопроса.</h2>
	<form action="practice_finaly.php" method="POST" >
		<h3> Первый вопрос: Напишите команду, которая делает код файла строго типизированным.</h3>
		<input type="text" name="question_1" placeholder="declare(strict_types=?)" required>
		<h3> Второй вопрос: Какое число выведет колличество аргументов $argc, если ни каких аргументов мы не передавали.</h3>
		<input type="text" name="question_2" placeholder="Введите число" required></br>
		<button>ОТВЕТИТЬ</button>
	</form>
	';
	}