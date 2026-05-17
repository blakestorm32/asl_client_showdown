<?php

include_once __DIR__ . '/../../config/news.inc.php';

function readableDate($time=0) {
	if (!$time) {
		$time = time();
	}
	return date('M j, Y',$time);
}

function renderNews() {
	global $latestNewsCache, $newsCache;
	$buf = '';
	$count = 0;

	foreach ($latestNewsCache as $topic_id) {
		$topic = $newsCache[$topic_id];

		$buf .= '<div class="newsentry" data-newsid="'.$topic_id.'" data-date="'.$topic['date'].'">';
		$buf .= '<h4>'.$topic['title_html'].'</h4>';
		$buf .= @$topic['summary_html'];

		$buf .= '<p>&mdash;<strong>'.$topic['authorname'].'</strong> ';
		$buf .= '<small class="date">on '.readableDate($topic['date']).'</small>';

		if (isset($topic['details'])) {
			$buf .= ' <small><a href="http://pokemonshowdown.com/news/'.$topic['topic_id'].'" target="_blank">Read more</a></small>';
		}

		$buf .= '</p>';
		$buf .= '</div>';

		if (++$count >= 2) break;
	}

	// Custom calculator news box
	$buf .= '<div class="newsentry broadcast-blue" data-newsid="9999">';
	$buf .= '<h4>Damage Calculators</h4>';

	$buf .= '<p><a href="https://aslchampions-damage-calc.up.railway.app/" target="_blank">';
	$buf .= 'Champions/Mystic Damage Calculator</a></p>';

	$buf .= '<p><a href="https://aslrelicanth-damage-calc.up.railway.app/" target="_blank">';
	$buf .= 'ASL Relicanth Calculator</a></p>';

	$buf .= '</div>';

	return $buf;
}

function getNewsId() {
	global $latestNewsCache, $newsCache;
	foreach ($latestNewsCache as $topic_id) {
		return $topic_id;
	}
}
