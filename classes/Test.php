<?php


class Test{


	/**
     * Adds two numbers.
     *
     * @soap
     *
     * @param float $p1
     * @minOccurs 1
     * @maxOccurs 1
     * @param float $p2
     * @return array
     */
    public function add($p1, $p2)
    {	
    	
    	$f = fopen("requests.txt","a");
    	fwrite($f, "\nЗапрос от клиента $p1 $p2\n");
    	fclose($f);

        return [$p1*$p2,$p1+$p2];
    }


}