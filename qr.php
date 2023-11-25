<?php
	defined('_JEXEC') or die('Access deny');
	
	class plgContentQR extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){	
		/**
		* 1. Je commence par gérer le remplacement de la balise Question
		*/
			$document = JFactory::getDocument();
			$document->addStyleSheet('plugins/content/qr/style.css');
			
			$re = '/{question}(.*){\/question}/mi';
			$subst = "<details class=\"questionSEO\">$1<summary>";
			$article->text = preg_replace($re, $subst, $article->text);
			
			
			$re = '/{question}(.*){\/question}/mi';
			$subst = "<details class=\"questionSEO\">$1<summary class=\"titre-question-seo\">";
			$article->text = preg_replace($re, $subst, $article->text);
			
			$re = '/{reponse}(.*){\/reponse}/mi';
			$subst = "<div class=\"content\">$1<summary class=\"titre-question-seo\">";
			$article->text = preg_replace($re, $subst, $article->text);

		}
	}
