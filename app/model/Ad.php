<?php

/**
 * Description of Ad
 *
 * test master znovu opet
 * @author Admin
 */
class Ad extends BaseManager
{
	
	/**
	 * vybere vsechny inzeraty
	 * @return DibiRow
	 */
    public function fetchAll()
    {
		return $this->dibi->fetchAll('
			SELECT
				ad.id,
				ad.title,
				ad.text,
				ad.price,
				ad.email,
				ad.phone,
				ad.password,
				ad.date,
				region.name AS regionName,
				category.name AS categoryName,
				type.name AS typeName
			FROM
				ad
			LEFT JOIN
				region ON ad.region_id = region.id
			LEFT JOIN
				category ON ad.category_id = category.id
			LEFT JOIN
				type ON ad.type_id = type.id
			ORDER BY 
				ad.date DESC
		');
    }
    
}

?>
