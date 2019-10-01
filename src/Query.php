<?php

/*
 * OLeg Demidov
 * ------------------------------------------------------
 * Contact e-mail: end-fin@yandex.ru
 *
 * GNU General Public License, version 2:
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * ------------------------------------------------------
 *
 * @link https://vk.com/u_demidova
 * @author Oleg Demidov <end-fin@yandex.ru>
 *
 */

namespace Packages;

/**
 * Description of Query
 *
 * @author oleg
 */
class Query {
    
    protected $aDataPackages;

    public function __construct(array $aDataPackages) {
        $this->aDataPackages = $aDataPackages;
    }
    
    public function where(array $aFilter) {
        $aPackages = [];
        
        foreach ($aFilter as $key => $value) {
            $aPackages = array_merge($this->getByOneFilter([$key => $value]));
        }
        
        return $aPackages;
    }
    
    protected function getByOneFilter(array $aFilter) {
        $aPackages = [];
        
        foreach ($this->aDataPackages as $aPackage) {
            if(!isset($aPackage[key($aFilter)])){
                continue;
            }
            
            if($aPackage[key($aFilter)] === current($aFilter)){
                $aPackages[] = new Package($aPackage);
            }         
        }
        
        return $aPackages;
    }
    
    public function all() {
        $aPackages = [];
        
        foreach ($this->aDataPackages as $aPackage) {
            if(isset($aPackage['name'])){
                $aPackages[$aPackage['name']] = new Package($aPackage);
            }
        }
        return $aPackages;
    }
    
    public function getData() {
        return $this->aDataPackages;
    }
    
}
