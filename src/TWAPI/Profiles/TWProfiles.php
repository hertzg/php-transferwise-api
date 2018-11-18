<?php

namespace TWAPI\Profiles;

use GuzzleHttp\ClientInterface;

/**
 * Class TWProfiles
 * @package TWAPI\Profiles
 */
class TWProfiles
{
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * TWProfiles constructor.
     * @param ClientInterface $httpClient
     */
    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }


    /**
     * @param BusinessProfile|PersonalProfile $profile
     * @return BusinessProfile|PersonalProfile
     */
    public function create($profile): Profile
    {
    }

    /**
     * @param BusinessProfile|PersonalProfile $profile
     * @return BusinessProfile|PersonalProfile
     */
    public function update($profile): Profile
    {

    }

    /**
     * @param int $profileId
     * @return BusinessProfile|PersonalProfile
     */
    public function getById($profileId): Profile
    {

    }

    /**
     * @return Profile[]
     */
    public function list(): array
    {

    }
}