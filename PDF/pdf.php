<?php session_start();
require("fpdf/fpdf.php");
include("../B_config/rapport.php");
// Création de la class PDF
class PDF extends FPDF {
	// Header
	function Header() {
		// Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
		$this->Image('logo.png',10,2);
		// Saut de ligne 20 mm
		$this->Ln(0);

		// Titre gras (B) police Helbetica de 11
		$this->SetFont('Helvetica','B',11);
		// fond de couleur gris (valeurs en RGB)
		$this->setFillColor(230,230,230);
 		$this->SetX(70);
		$this->Cell(60,8,'NURU BANQUE RAPPORT',0,1,'C',1);
		$this->Ln(15);
		$this->SetFont('Helvetica','I',11);
        $codex = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6);
        $codex = substr(str_shuffle("0123456789"), 0, 6).'.'.$codex;
		$codex = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$codex;
		$codex = substr(str_shuffle("0123456789"), 0, 6).'.'.$codex;
		$codex = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$codex;
		$this->Cell(105,8,'ID-RAPPORT: '.$codex,0,1,'L',1);
		$this->Ln(1);
		$this->Cell(60,8,'Client-ID: '.$_POST['compte'],0,1,'L',1);
		// Saut de ligne 10 mm
		$this->Ln(1);		
	}
	// Footer
	function Footer() {
		// Positionnement à 1,5 cm du bas
		$this->SetY(-15);
		// Police Arial italique 8
		$this->SetFont('Helvetica','I',9);
		// Numéro de page, centré (C)
		$this->Line(200,283,10,283);
		$this->Cell(0,10,'Nuru_banque@2022 sur www.nurubanque.cd ',0,0,'C');
		$this->Ln(5);
		$this->Cell(0,10, 'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}


// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new PDF('P','mm','A4');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();


// Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
$pdf->SetFont('Helvetica','B',11);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(230,230,230);					
$pdf->Ln(10); // saut de ligne 10mm	
// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table($position_entete) {
	global $pdf;
	$pdf->SetDrawColor(183); // Couleur du fond RVB
	$pdf->SetFillColor(221); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(11,8,'N*',1,0,'C',1);
	$pdf->SetX(20);
	$pdf->Cell(60,8,'Date',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(60); 
	$pdf->Cell(61,8,'Transaction ID',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(121); 
	$pdf->Cell(40,8,'Details',1,0,'C',1);
	$pdf->SetX(161); 
	$pdf->Cell(20,8,'Solde',1,0,'C',1);
	$pdf->SetX(181); 
	$pdf->Cell(20,8,'Montant',1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
}
// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete = 58;
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
	entete_table($position_entete);
	$x=0;
	$compte=0;
	while($rap=$query->fetch()){
		$x++;
		$pdf->SetX(10);
	if($x%2!=0) $pdf->setFillColor(255,255,255);
	else $pdf->setFillColor(230,230,230);
	$pdf->Cell(11,8,$x,1,0,'C',1);
	$pdf->SetX(20);
	$pdf->Cell(40,8,$rap['date_trans'],1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(60); 
	$pdf->Cell(61,8,$rap['trans_mat'],1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(121); 
	$pdf->Cell(40,8,$rap['motif'],1,0,'C',1);
	$pdf->SetX(161); 
	$pdf->Cell(20,8,$rap['solde'],1,0,'C',1);
	$pdf->SetX(181); 
	$pdf->Cell(20,8,$rap['montant_ret'],1,0,'C',1);
	$pdf->Ln();
	$compte=$rap['client_mat'];
	}
// // Nouvelle page PDF
// $pdf->AddPage();
// // Polices par défaut : Helvetica taille 9
// $pdf->SetFont('Helvetica','',11);
// // Couleur par défaut : noir
// $pdf->SetTextColor(0);
// // Compteur de pages {nb}
// $pdf->AliasNbPages();
// $pdf->Cell(500,20,utf8_decode('Plus rien à vous dire ;-)'));


$pdf->Output('../B_rapport/'.$compte.'.pdf','I'); // affichage à l'écran
// Ou export sur le serveur
$compte=str_replace(' ', '', $compte);
//$pdf->Output('F', '../B_rapport/'.$compte.'.pdf');
header('location: ../B_users/rapports.php?rapport='.$compte);
?>