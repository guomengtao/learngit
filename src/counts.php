<?php

namespace learngit\src;

// if set autoload at this dir ,the namespace learngit

class counts{

    /**
     * 返回数字a和b的和
     * @param int $a      数字
     * @param int $b      数字
     */

	public static function add(int $a,int $b){
		return $a+$b;
	}
}