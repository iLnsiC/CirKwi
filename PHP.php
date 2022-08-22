<?php
// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60]];
// J'ajoute un mouton
array_push($moutons, ['Gérard',120]);
//Methode de calcule pour la valeur moyenne des moutons
function calcValMoy() {
	$nbMoutons=0;
	$sumValMoutons=0;
	foreach ($moutons as $mouton) {
		$sumValMoutons = $sumValMoutons + $mouton[1];
		$nbMoutons++;
	}
	$moyValMoutons = $sumValMoutons/$nbMoutons;
	echo "Moyenne de la valeur de mes ". count($moutons)." moutons : ".$moyValMoutons;
}
//Methode pour creer un mouton random et l'ajouter au tableau
function randMouton(){
	$randNameMouton = "";
	$nbCharsNameMouton=rand(3,15);
	$chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
	$nbChars = strlen($chaine);
	$randValMoutons = rand(10,200);
	for($k=0; $k<$nbCharsNameMouton; $k++){
		$randNameMouton .= $chaine[rand(0, ($nbChars-1))];
	}
	array_push($moutons, [$randNameMouton, $randValMoutons]);
}
// Je calcule la moyenne de la valeur de mes moutons
calcValMoy();
// Ajout de 100 moutons aléatoires
for ($j=0; $j < 100; $j++) {
	randMouton();
}
echo PHP_EOL;
// Je calcule à nouveau la moyenne
calcValMoy();

// LEXO DE LA COMPAGNIE TEL QUE FOURNIS

// Factorisez au mieux le code ci-dessus
// ⚠ Dans votre code n'hésitez pas à laissez des remarques sur de futures améliorations possibles.
// Important : Pour éviter un soucis de perte de session, copiez-collez l'exercice pour plus tard, terminez d'abord le questionnaire et envoyez les fi chiers compressés à l'adresse indiquée dans le mail qui vous a été envoyé en précisant votre nom et prénom.
// ⚠ Il est recommandé d'utiliser Google Drive ou un service similaire pour transmettre les exercices. Votre candidature risque d'être ignorée si nous ne les recevons pas !


// <?php
// // Un tableau de moutons
// $moutons = [['Danny', 75], ['Richard',60]];
// // J'ajoute un mouton
// array_push($moutons, ['Gérard',120]);
// // Je calcule la moyenne de la valeur de mes moutons
// $i=0;
// $nbMoutons=0;
// $sumValMoutons=0;
// foreach ($moutons as $mouton) {
// $sumValMoutons = $sumValMoutons + $mouton[1];
// $nbMoutons++;
// $i++;
// } $moyValMoutons = $sumValMoutons/$i;echo "Moyenne de la valeur de mes ". count($moutons)." moutons : ".$sumValMoutons/$i;
// // Ajout de 100 moutons aléatoires
// for ($j=0; $j < 100; $j++) {
// $randNameMouton = "";
// $nbCharsNameMouton=rand(3,15);
// $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
// $nbChars = strlen($chaine);
// $randValMoutons = rand(10,200);
// for($k=0; $k<$nbCharsNameMouton; $k++)
// {
// $randNameMouton .= $chaine[rand(0, ($nbChars-1))];
// }
// array_push($moutons, [$randNameMouton, $randValMoutons]);
// }
// echo PHP_EOL;
// // Je calcule à nouveau la moyenne
// $i=0;
// $nbMoutons=0;
// $sumValMoutons=0;
// foreach ($moutons as $mouton) {
// $sumValMoutons = $sumValMoutons + $mouton[1];
// $nbMoutons++;
// $i++;
// } $moyValMoutons = $sumValMoutons/$i;echo "Moyenne de la valeur de mes ". count($moutons)." moutons : ".$sumValMoutons/$i;
