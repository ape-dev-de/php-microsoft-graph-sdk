<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditActivityInitiator
 */
class AuditActivityInitiator
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * If the resource initiating the activity is an app, this property indicates all the app related information like appId and name.
     * @var AppIdentity|\stdClass|null
     */
    public mixed $app = null;

    /** 
     * If the resource initiating the activity is a user, this property Indicates all the user related information like user ID and userPrincipalName.
     * @var UserIdentity|\stdClass|null
     */
    public mixed $user = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['app'])) {
            $this->app = is_array($data['app']) ? new AppIdentity($data['app']) : $data['app'];
        }
        if (isset($data['user'])) {
            $this->user = is_array($data['user']) ? new UserIdentity($data['user']) : $data['user'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
