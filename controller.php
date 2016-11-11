<?php
function home_action()
{
  $challenges =  get_all_challenges();

  include 'views/home.php';
}

function show_chall($id)
{
	$chall = get_chall($id);

	switch ($id) {
		case 1: // Génération d'un damier

			$nb = $_GET['nb'];
			// création du fichier data.txt
			$data = create_damier($nb);

			$data = fopen("../data/data.txt", "r");
			$data_table = [];
			$line = '';
			$i=0;
			while(! feof($data)) // tant qu'on est pas à la fin du fichier
			{
				$line	= fgets($data);
				$line = rtrim($line,"\r\n");
				for ($j=0; $j < strlen($line); $j++) { 
					$data_table[$i][$j] = $line[$j];
				}
				$i++;
			}
			$size = count($data_table);

			include 'views/checkerboard.php';
			break;

		case 2: // Pavage de cercles
			if(!empty($_GET['nb']))
			{
				header('location: /index.php/chall?id='.$id);
			}
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$_SESSION = []; // On initialise une variable de session

				if ($_POST['number']<=0)
				{
					$_SESSION['error'] = "Veuillez renseigner un nombre superieur à 0";
					break;
				}

				$nb = $_POST['number'];
			}

			include 'views/circlepaving.php';
			break;

		case 3: // suite de cyracuse
			
			if(!empty($_GET['nb']))
			{
				header('location: /index.php/chall?id='.$id);
			}
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$_SESSION = []; // On initialise une variable de session

				if ($_POST['number']<=0)
				{
					$_SESSION['error'] = "Veuillez renseigner un nombre superieur à 0";
					break;
				}

				$nb = $_POST['number'];
				$result_table = get_cyracuse_suite($nb);
			}

			include 'views/cyracuse.php';
			break;

		default:

			break;
	}
}

function show_checkerboard()
{

}