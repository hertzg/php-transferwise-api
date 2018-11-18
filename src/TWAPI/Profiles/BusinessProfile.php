<?php

namespace TWAPI\Profiles;


class BusinessProfile extends Profile
{
    protected const FIELD_NAME_DETAILS = 'details';

    protected $details;

    /**
     * @return mixed
     */
    public function getDetails() : BusinessProfileDetails
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails(BusinessProfileDetails $details): void
    {
        $this->details = $details;
    }


}