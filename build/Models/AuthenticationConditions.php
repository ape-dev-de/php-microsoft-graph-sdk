<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditions
 */
class AuthenticationConditions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Applications which trigger a custom authentication extension.
     * @var AuthenticationConditionsApplications|\stdClass|null
     */
    public AuthenticationConditionsApplications|\stdClass|null $applications = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applications'])) {
            $this->applications = is_array($data['applications']) ? new AuthenticationConditionsApplications($data['applications']) : $data['applications'];
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
