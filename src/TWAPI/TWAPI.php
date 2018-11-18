<?php

namespace TWAPI;

use GuzzleHttp\ClientInterface;
use TWAPI\Profiles\TWProfiles;

class TWAPI
{
    protected $profiles;
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * TWAPI constructor.
     * @param ClientInterface $clientInterface
     */
    protected function __construct(ClientInterface $clientInterface)
    {
        $this->httpClient = $clientInterface;
    }

    public function profiles()
    {
        if (!$this->profiles) {
            $this->profiles = new TWProfiles($this->httpClient);
        }
        return $this->profiles;
    }
}