<?php
/**
 * Created by PhpStorm.
 * User: Hertz
 * Date: 18.11.2018
 * Time: 16:26
 */

namespace TWAPI\Profiles;

abstract class ProfileDetails
{
    protected const FIELD_NAME_PRIMARY_ADDRESS = 'primaryAddress';

    private $primaryAddress;

    /**
     * @return mixed
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * @param mixed $primaryAddress
     */
    public function setPrimaryAddress($primaryAddress): void
    {
        $this->primaryAddress = $primaryAddress;
    }


}