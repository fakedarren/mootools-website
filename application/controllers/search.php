<?php

class Search extends Control {

	protected function index(){
		$this->data('page', 'Search');
		$this->data('title', 'MooTools');
		
		$url = explode('?', $_SERVER['REQUEST_URI']);
		parse_str($url[1], $fields);
		
		$search = new SearchResults();
		
		$originalquery = trim($fields['q']);
		
		$query = ($originalquery == '' ? $query = '*' : $originalquery);
		$page = (isset($fields['page']) ? $fields['page'] : 1);
		
		$start = ($page - 1) * 10 + 1;
		
		$results = $search->query($query, $start);
		$count = $results->getNumFound() - 1;

		$end = ($start + 9 > $count ? $count : $start + 9);

		$this->currentQuery = 'q=' . $fields['q'] . '&page=';
		$this->currentPage = $page;
		
		$this->data('searchterm', $originalquery);
		$this->data('count', $count);
		
		$this->data('start', $start);
		$this->data('end', $end);
		
		$this->data('results', $results);
		$this->data('pagination', $this->getPagination($results));
		
		$this->render();
	}
	
	protected function getPagination($results){
		$total = round($results->getNumFound() + 5, -1) / 10;
		$split = false;

		if ($total == 1) return;		
		
		$html = '<ul class="pagination">';
		for ($i = 1; $i <= $total; $i++){
			if ($i <= 4 || $i > ($total - 4)){
				$html.= '<li' . ($i == $this->currentPage ? ' class="active"' : '') . '>';
				$html.= '<a href="/search/?' . $this->currentQuery . $i . '">' . $i . '</a>';
				$html.= '</li>';
			} elseif ($split == false){
				$split = true;
				$html.= '<li><a href="#">&hellip;</a></li>';
			}
		}
		$html.= '</ul>';
		return $html;
	}

}

?>