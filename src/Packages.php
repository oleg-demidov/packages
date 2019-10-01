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
 * Фабрика для работы с installed.json
 *
 * @author oleg
 */
class Packages {
    /**
     * @var array файл json считанный в массив 
     */
    
    protected $query;

    /**
     * 
     * @param string $sPathToJson
     */
    public function __construct(string $sPathToJson) {
        $this->query = new \Packages\Query($this->readJsonToArray( $sPathToJson));
    }
    
    
    
    public function getData() {
        return $this->query->getData();
    }
    
    /**
     * 
     * @return Query
     */
    public function query() {
        return $this->query;
    }
    
    /**
     * @param string $sPathToJson путь к файлу
     * @return array json массив 
     * @throws Exceptions\PackagesException
     */
    protected function readJsonToArray(string $sPathToJson) {
//        try{
            $sFile = file_get_contents($sPathToJson);
            return json_decode($sFile, true);
            
//        } catch (Exception $e){
//            throw new Exceptions\PackagesException($e->getMessage());
//        }
    }
}
