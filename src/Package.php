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
 * Description of Package
 *
 * @author oleg
 */
class Package {
    
    protected $aDataPackage;
    
    public function __construct(array $aDataPackage) {
        $this->aDataPackage = $aDataPackage;
    }

    public function version() {
        return $this->get('version');
    }
    
    public function get(string $sKey) {
        if(!isset($this->aDataPackage[$sKey])){
            throw new Exceptions\PackagesException("No key {$sKey} in package {$this->aDataPackage['name']}");
        }
        
        return $this->aDataPackage[$sKey];
    }
}
