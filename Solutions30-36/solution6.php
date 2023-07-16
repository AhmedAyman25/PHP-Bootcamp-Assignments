<?php
$genre = "Hack And Slash";

switch($genre):
	case "RPG":
		echo "I Recommend Ys Games"; break;
	case "Hack And Slash":
		echo "I Recommend Castlevania games ";break;
	case 'FPS ':
		echo " I recommend uncharted games "; break;
	case 'Platform':
	case 'Puzzle':
		 echo "I Recommend Megaman Games"; break;
	default:
		echo  "I Recommend Shadow Of Mordor And Shadow Of War";
		break;

	endswitch;

		
		