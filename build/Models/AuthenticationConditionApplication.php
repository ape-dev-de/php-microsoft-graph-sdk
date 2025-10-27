<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditionApplication
 */
class AuthenticationConditionApplication
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The identifier for an application corresponding to a condition which will trigger an authenticationEventListener. */
    public ?string $appId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
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
