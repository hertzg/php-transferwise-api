<?php

namespace TWAPI\Profiles;


class PersonalProfile extends Profile
{
    protected $details;

    /**
     * @return mixed
     */
    public function getDetails() : PersonalProfileDetails
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails(PersonalProfileDetails $details): void
    {
        $this->details = $details;
    }


}