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
    
    use ReadTrait;
    
    protected $aData;
    
    public function __construct(array $aDataPackage) {
        $this->aData = $aDataPackage;
    }

    public function version() {
        return $this->get('version');
    }
    
}
