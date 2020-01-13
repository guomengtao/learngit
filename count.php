<?php

namespace learngit;

class count{

    /**
     * 返回数字a和b的和
     * @param int $a      数字
     * @param int $b      数字
     */

	public static function add(int $a,int $b){
		return "count:".$a+$b;
	}
	// add dump function
	public static function dump($var)
	{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
	}
}