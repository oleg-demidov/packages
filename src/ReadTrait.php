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
 * Description of ReadTrait
 *
 * @author oleg
 */
trait ReadTrait {
    
    public function get( string $sKey) {
        if(preg_match('/^([^\.]+)\.([^\.]+)/u', $sKey, $aKeys) === 1){
            if(!isset($this->aData[$aKeys[1]][$aKeys[2]])){
                return false;
            }
            return $this->aData[$aKeys[1]][$aKeys[2]];
        }
        
        if(preg_match('/^([^\.]+)\.([^\.]+)\.([^\.]+)/u', $sKey, $aKeys) === 1){
            if(!isset($this->aData[$aKeys[1]][$aKeys[2]][$aKeys[3]])){
                return false;
            }
            return $this->aData[$aKeys[1]][$aKeys[2]][$aKeys[3]];
        }
        
        if(!isset($this->aData[$sKey])){
            return false;
        }
        
        return $this->aData[$sKey];
    }
}
