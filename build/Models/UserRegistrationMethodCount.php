<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodCount
 */
class UserRegistrationMethodCount
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Name of the authentication method. */
    public ?string $authenticationMethod = null;

    /** Number of users registered. */
    public ?float $userCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['authenticationMethod'])) {
            $this->authenticationMethod = $data['authenticationMethod'];
        }
        if (isset($data['userCount'])) {
            $this->userCount = is_numeric($data['userCount']) ? (float)$data['userCount'] : $data['userCount'];
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
