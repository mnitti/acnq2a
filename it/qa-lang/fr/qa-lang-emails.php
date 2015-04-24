<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications
	Translation by: Gérard @ Akelaï Conseil (akelai.fr); (some admin texts left in english)

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Votre réponse sur ^site_title a reçu un commentaire de ^c_handle::\n\n^open^c_content^close\n\nVotre réponse était:\n\n^open^c_context^close\n\nVous pouvez répondre en ajoutant votre propre commentaire:\n\n^url\n\nMerci,\n\n^site_title",
		'a_commented_subject' => 'Votre réponse sur ^site_title a reçu un nouveau commentaire',
		'a_followed_body' => "Votre réponse sur ^site_title a une nouvelle question sur le même sujet de ^q_handle:\n\n^open^q_title^close\n\nVotre réponse était:\n\n^open^a_content^close\n\nCliquez ci-dessous pour répondre à cette nouvelle question:\n\n^url\n\nMerci,\n\n^site_title",
		'a_followed_subject' => 'Votre réponse sur ^site_title a une question sur le même sujet',
		'a_selected_body' => "Félicitations! Votre réponse sur ^site_title a été sélectionnée comme la meilleure par ^s_handle:\n\n^open^a_content^close\n\nLa question était:\n\n^open^q_title^close\n\nCliquez ci-dessous pour voir votre réponse:\n\n^url\n\nMerci,\n\n^site_title",
		'a_selected_subject' => 'Votre réponse sur ^site_title a été sélectionnée!',
		'c_commented_body' => "Un autre commentaire  de ^c_handle a été ajouté après le vôtre sur ^site_title:\n\n^open^c_content^close\n\nLa discussion est sur:\n\n^open^c_context^close\n\nVous pouvez répondre en ajoutant un autre commentaire:\n\n^url\n\nMerci,\n\n^site_title",
		'c_commented_subject' => 'Votre commentaire sur ^site_title a été ajouté à ',
		'confirm_body' => "Cliquez ci-dessous pour confirmer votre adresse email pour ^site_title.\n\n^url\n\nMerci,\n^site_title",
		'confirm_subject' => '^site_title - Confirmation d\'adresse email ',
		'feedback_body' => "Commentaires:\n^message\n\nNom:\n^name\n\nEmail:\n^email\n\nPage précédente:\n^previous\n\nUtilisateur:\n^url\n\n Addresse IP:\n^ip\n\nNavigateur:\n^browser",
		'feedback_subject' => '^ feedback',
		'flagged_body' => "Un post de ^p_handle a reçu ^flags:\n\n^open^p_context^close\n\nCliquez ci-dessous pour voir le post:\n\n^url\n\nMerci,\n\n^site_title",
		'flagged_subject' => '^site_title a reçu un signalement sur un post',
		'moderate_body' => "Un post de ^p_handle a besoin de votre approbation:\n\n^open^p_context^close\n\nCliquez ci-dessous pour approuver ou rejeter le post:\n\n^url\n\nMerci,\n\n^site_title",
		'moderate_subject' => '^site_title modération',
		'new_password_body' => "^Votre nouveau mot de passe pour ^site_title est l esuivant.\n\nMot de passe: ^password\n\nIl est préférable de le changer immédiatement.\n\nMerci,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Votre nouveau mot de passe',
		'private_message_body' => "Vous avez reçu un message privé de ^f_handle sur ^site_title:\n\n^open^message^close\n\n^moreMerci,\n\n^site_title\n\n\nPour bloquer les messages privés, aller à la page de votre compte:\n^a_url",
		'private_message_info' => "Plus d'informations sur ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Cliquer ci-dessous pour répondre à ^f_handle avec une message privé:\n\n^url\n\n",
		'private_message_subject' => 'Message de ^f_handle sur ^site_title',
		'q_answered_body' => "Votre question sur ^site_title vient de recevoir une réponse de ^a_handle:\n\n^open^a_content^close\n\nVotre question était:\n\n^open^q_title^close\n\nSi vous aimez cette réponse, vous pouvez l\'étiqueter comme la meilleure:\n\n^url\n\nMerci,\n\n^site_title",
		'q_answered_subject' => 'Votre question sur ^site_title a reçu une réponse ',
		'q_commented_body' => "Votre question sur ^site_title a reçu un nouveau commentaire de ^c_handle:\n\n^open^c_content^close\n\nVotre question était:\n\n^open^c_context^close\n\nVous pouvez répondre en ajoutant votre propre commentaire:\n\n^url\n\nMerci,\n\n^site_title",
		'q_commented_subject' => 'Votre question sur ^site_title a reçu un nouveau commentaire',
		'q_posted_body' => "Une nouvelle question a été posée par ^q_handle sur ^site_title:\n\n^open^q_title\n\n^q_content^close\n\nCliquez ci-dessous pour voir la question:\n\n^url\n\nMerci,\n\n^site_title",
		'q_posted_subject' => '^site_title a une nouvelle question',
		'reset_body' => "Cliquez ci-dessous pour réinitialiser votre mot de passe pour ^site_title.\n\n^url\n\nVous pouvez également rentrer le code ci-dessous dans le champs correspondant.\n\nCode: ^code\n\nSi vous n\'avez pas demandé la réinitialisation de votre mot de passe, ignorez cet email.\n\nMerci,\n^site_title",
		'reset_subject' => '^site_title - Réinitialiser votre mot de passe',
		'to_handle_prefix' => "^,\n\n",
		'welcome_body' => "Merci pour votre inscription sur ^site_title.\n\n^custom^confirmVos codes de connexion sont les suivants:\n\nEmail: ^email\nMot de passe: ^password\n\nGardez ces informations à l'abri.\n\nMerci,\n\n^site_title\n^url",
		'welcome_confirm' => "Merci de cliquez ci-dessous pour confirmer votre adresse email.\n\n^url\n\n",
		'welcome_subject' => 'Bienvenue sur ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/