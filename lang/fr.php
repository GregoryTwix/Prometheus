<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * French translation courtesy of Hikage, Scozor and Yellow.
	 */
	
    /**
     * Text direction
     * @var string
     *
     * LTR = Left to right
     * RTL = Right to left
     */
    $dir = 'ltr';
	
	$lang = array(

		// Navigation bar
		"home" => "Accueil",
		"store" => "Magasin",
		"buy_credits" => "Acheter des Crédits",
		"raffles" => "Tombola",
		"profile" => "Profil",
		"support" => "Support",
		"admin" => "Administration",
		"sign_out" => "Se Déconnecter",
		"sign_in" => "Se Connecter",

		// Header errors and messages
		"not_setup" => "Vous n'avez pas configuré votre panneau correctement ! <a href='admin.php?a=gen&p=settings'>Cliquez ici</a> [Administration ->  Paramètres généraux -> Paramètres]",
		"header_sandbox" => "PayPal Sandbox est activé. N'utilisez le sandbox que pour les tests ! Vous pouvez le désactiver <a href='admin.php?a=gen&p=paypal'>ici</a>",
		"missing_action" => " Il manque une action dans un ou plusieurs pack(s)",
		"unfinished_action" => "Vous avez une action inachevée sur la page 'Profil', <a href='profile.php'>ici</a>",

		// Frontpage
		"welcome" => "Bienvenue - Inscrivez-vous",
		"welcome_text" => "Connectez-vous par le biais de Steam pour utiliser notre portail de dons simplifié.",

		// News
		"news" => "News",
		"by" => "Par",
		"no_news" => "Pas de news",
		"no_news_text" => "Il n'y a pas de news.",
		"no_news_articles" => "Pas de nouveaux articles.",

		// Footer
		"tos" => "Conditions générales d'utilisation",
		"powered_by" => "Propulsé par Steam",

		// Store
		"credits" => "Crédits",
		"featured_pkg" => "Pack vedette",
		"permanent" => "Permanent",
		"non_permanent" => "Temporaire",

		"select_credit" => "Selectionner Pack de Crédit",
		"select_raffle" => "Selectionner Pack de Tombola",
		"global_packages" => "Pack Globaux",

		// Raffles
		"raffle_ticket" => "Acheter un ticket",
		"raffle_ended" => "La tombola a pris fin, le gagnant est: ",
		"raffle_not_compatible" => "Ce pack n'est pas compatible avec celui que vous possédez. L'entrée à la tombola vous est donc refusée.",
		"raffle_already_own" => "Vous possédez déjà ce pack. L'entrée à la tombola vous est donc refusée.",
		"raffle_reached_max" => "Vous avez atteint le montant maximum d'entrées de tombola. L'entrée à la tombola vous est donc refusée.",

		// Support
		"create_ticket" => "Créer billet",
		"ticket_closed" => "Ce billet est fermé.",
		"reply" => "Répondre",
		"create" => "Créer",

		// Terms of Service
		"tos_edited" => "Les CGU ont été édité. Veuillez accepter les <a href='tos.php'>conditions générales d'utilisation</a> avant d'acheter un paquet !",
		"tos_must_accept" => "Vous devez accepter les CGU avant d'acheter !",
		"tos_accept" => "Accepter",

		// Purchase buttons
		"purchase_paypal" => "Acheter avec Paypal",
		"purchase_credits" => "Acheter avec des Crédits",
		"purchase" => "Acheter",
		"buy_sign_in" => "Vous devez être connecté avant d'acheter !",
		"buy_already_own" => "Vous possédez déjà ce pack !",
		"buy_not_compatible" => "Ce pack n'est pas compatible avec celui que vous possédez !",
		"buy_they_already_own" => "Cette personne possède déjà ce pack !",
		"buy_they_not_compatible" => "Ce pack n'est pas compatible avec celui qu'il possède !",

		// Packages
		"buying_someone_else" => "Vous faites des achats pour quelqu'un d'autre ?",
		"buying_yourself" => "Vous êtes en train d'acheter pour vous-même",
		"buying_for" => "Vous êtes en train d'acheter pour",
		"packages_custom_amount" => "Montant personnalisé",

		"packages_not_available" => "Aucun pack n'est disponible pour ce serveur.",
		"raffle_not_available" => "Aucun pack de tombola n'est disponible pour le moment.",
		"credit_not_available" => "Aucun pack de crédit n'est disponible pour le moment.",

		// Buttons
		"submit" => "Envoyer",

		// Profile
		"non_perm_pkg" => "Pack Temporaire",
		"perm_pkg" => "Pack(s) Permanent",
		"acc_info" => "Informations du Compte",
		"pkg_history" => "Historique de Pack",
		"acc_credits" => "Crédits",
		"transfer_credits" => "transfert de Crédits",
		"package" => "Pack",

		// Tables
		"id" => "ID",
		"user" => "Utilisateur",
		"description" => "Description",
		"timestamp" => "Horodatage",
		"action" => "Action",
		"replies" => "Réponses",
		"view" => "Consulter",

		// Select boxes
		"select_server" => "Sélectionnez votre serveur:",
		"select_currency" => "Sélectionnez votre devise:",
		"select_category" => "Sélectionnez votre categorie:",
		"none" => "Aucun",

		// Modals
		"yes" => "Oui",
		"no" => "Non",
		"sure" => "Êtes-vous sûr?",
		"sure_cur" => "Êtes-vous sûr de vouloir supprimer cette devise ?",
		"sure_srv" => "Êtes-vous sûr de vouloir supprimer ce serveur ?",
		"sure_cat" => "Êtes-vous sûr de vouloir supprimer cette catégorie ?",

		// Dangerous settings
		"dangerous" => "Paramètres Dangereux",
		"danger_cur" => "Ou bien, vous pouvez supprimer cette devise.",
		"danger_srv" => "Ne supprimez ce serveur que si aucun pack ne lui est attribué!",
		"danger_cat" => "Ne supprimez cette catégorie que si aucun pack ne lui est attribué!",
		"delete" => "Effacer",

		// Admin nav
		"dashboard" => "Tableau de bord",
		"general_settings" => "Paramètres généraux",
		"support_tickets" => "Tickets de support",
		"servers" => "Serveurs",
		"currencies" => "Devises",
		"categories" => "Catégories",
		"packages_and_actions" => "Packs & actions",
		"credit_packages" => "Pack de crédits",
		"raffles" => "Tombola",
		"theme_editor" => "Éditeur de thèmes",
		"documentation" => "Documentation",

		// General Settings
		"settings" => "Paramètres",
		"main_page" => "Page d'accueil",
		"integration_settings" => "Paramètres d'intégration",
		"ingame_notifications" => "Notifications en jeu",

		// Servers page
		"add_srv" => "Ajouter un serveur",
		"edit_srv" => "Editer un serveur",
		"server_name" => "Nom du serveur",
		"featured_pkg_short" => "Pack vedette",

		// Currency page
		"add_cur" => "Ajouter une devise",
		"edit_cur" => "Editer une devise",
		"cc" => "Code de la devise",

		// Category page
		"add_cat" => "Ajouter une catégorie",
		"edit_cat" => "Editer une catégorie",
		"cat_name" => "Nom de la Catégorie",

		// Dashboard nav
		"main_dashboard" => "Tableau de bord principal",
		"sale" => "Vente",
		"transactions" => "Transactions",
		"users" => "Utilisateurs",
		"logs" => "Logs",
		"update_sql" => "Mise à jour SQL",
		"other_features" => "Autres fonctionnalités",

		// Admin dashboard
		"total" => "Total",
		"full_total" => "Total Global",
		"dashboard_text" => "Bienvenue sur le tableau de bord administrateur, c'est ici que vous serez en mesure de voir les statistiques des dons de vos serveurs.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Bienvenue",
		"need_credits" => "Besoin de plus de crédits ? <a href='store.php?credits'>Cliquez ici !</a>",
		"no_history" => "Pas d'historique",
		"amount" => "Montant",
		"you_have_none" => "Vous n'en avez aucun !",

		"add_cre" => "Ajouter un pack de crédits",
		"edit_cre" => "Éditer un pack de crédits",
		"pack_title" => "Titre du pack",
		"price" => "Prix",
		"currency" => "Devise",
		"sure_cre" => "Êtes-vous sûr de vouloir supprimer ce pack de crédits ?",
		"danger_cre" => "Ou bien, vous pouvez supprimer ce pack de crédits.",
		"select_package" => "Sélectionner le pack:",
		"choose_cre" => "Choisir le pack de crédits",
		"brief_desc" => "Brève description",
		"amt_of_cre" => "Nombre de crédits",
		"price_of_pkg" => "Prix du pack",
		"no_support" => "Vous n'avez pas de ticket de support",
		"no_other_available" => "Pas d'autres packs disponibles",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Obtenez ce pack gratuitement !",
		"dashboard_revenuegraph" => "Graphique des Revenues",
		"dashboard_revenuecurrency" => "Affiché dans votre devise principale",
		"dashboard_packagesgraph" => "Packs Vendus",
		"dashboard_serversgraph" => "Packs Serveurs Vendus",
		"between" => "Entre",
		"and" => "Et",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Gratuit",
		"buy_own_free" => "Vous possédez déjà ce pack gratuit. Vous ne pouvez pas le demander deux fois !",

         /**
         * New in 1.4.9.2
         */
        "updates" => "Mises à jour",

      	/**
		 * New in 1.4.9.3
		 */
		"header_sqlupdate" => "Vous avez une mise à jour MySQL non appliquée <a href='admin.php?update'>ici !</a>",
		"monthly_goal" => "Objectif mensuel",

		/**
		 * New in 1.4.9.6
		 */
		"payment_success" => "Paiement réussi !",
		"profile_updated" => "Votre profil a été mis a jour.",
		"payment_failed" => "Le paiement a échoué !",
		"check_credits" => "Veuillez s'il vous plaît vérifier que vous avez suffisamment de crédits pour acheter ce pack !",
		"not_authorised" => "Vous n'êtes pas autorisé à afficher cette zone. Connectez-vous pour cela !",

		/**
		 * New in 1.5
		 */
		"wiki" => "Wiki",
		"no_graph_info" => "Aucune information graphique",
		"no_graph_info_text" => "S'il n'y a pas d'infos graphiques, c'est dû à l'absence de transactions !",
		"paymentwall_purchase" => "Acheter avec Paymentwall",
		"stripe_purchase" => "Acheter avec Stripe",
		"payment_gateways" => "Passerelles de paiement",
		"advanced" => "Avancé",
		"no_servers" => "Pas de serveurs disponible pour le moment",
		"entries" => "entrées",
		"you_can_enter" => "Vous pouvez entrer",
		"times_more" => "fois encore",
		"dashboard_creditsrevenue" => "Ce graphique compare également les crédits dépensés pour l'argent dépensé. À condition que les crédits soient acquis grâce à de l'argent. (Crédits = <font color='#9c9c9c'><b>Gray</b></font>, Argent = <font color='#c10000'><b>Red</b></font>)",
		"pkg_discounted" => "Ce pack est soldé car vous le possédez",

		"compatible_text" => "Si vous possédez ce Pack, vous ne pouvez pas posséder ceux listés ci-dessous",
		"not_compatible" => "Incompatible avec",

		"packages" => "Packs",
		"upgradeable_text" => "Si vous possédez un pack, vous pouvez en obtenir d'avantage à prix réduit",
		"upgradeable" => "Extensible avec",

		"assign_actions" => "Assigner des actions",
		"actions_text" => "Assigner une/des action(s) personnalisées après l'achat d'un pack",
		"actions" => "Actions",
		"servers" => "Serveurs",
		"label_amount" => "Label du montant",
		"add_package" => "Ajouter un pack",
		"edit_package" => "Modifier un pack",
		"labels" => "Labels",
		"title" => "Titres",
		"category" => "Catégorie",
		"no_packages" => "Vous n'avez actuellement aucun pack dans le système",

		/**
		 * New in 1.5.0.2
		 */
		"hide" => "Cacher ce pack",
		"hide_text" => "If you dont own one of the packages selected below, hide this package from the store",
		
		/**
		 * New in 1.5.0.6
		 */
		"signin" => "Se connecter",
		"welcome_signin" => "Vous devez vous connecter afin d'acheter des packs",
		"blacklist_notext" => "Vous devez entrer un SteamID ou Steam64 valide pour l'ajouter à la blacklist.",
		"blacklist_success" => "Vous avez ajouté cette personne à la blacklist avec succès.",
		"blacklisted_you" => "Vous êtes sur la blacklist, vous ne pouvez pas acheter ceci.",
		"blacklisted_them" => "Cette personne est sur la blacklist, vous ne pouvez lui acheter ceci.",

		"recent_donators" => "Donateurs récents",
		"name" => "Nom",
		"recent_none" => "Il n'y a aucun donateur",
		"raffle_free" => "Obtenir un ticket gratuitement",

		/**
		 * New in 1.5.0.8
		 */
		"top_donators" => "Top 3 des donateurs",
		"top_none" => "Il n'y a aucun donateur",

		/**
		 * New in 1.5.0.9
		 */
		"step" => "Step",

		/**
		 * New in 1.5.1
		 */
		"permission_groups" => "Groupe de Permissions",
		"add_permission" => "Ajouter groupe de permissions",
		"edit_permission" => "Editer groupe de permissions",
		"permissions" => "Permissions",
		"no_perm" => "Je suis désolé Dave, je crains que de ne pouvoir vous laisser faire ça (permissisons insuffisantes)",

		/**
		 * New in 1.5.1.2
		 */
		"select_gateway" => "Sélectionnez une méthode de paiement",
	);

?>
