<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BasicAuthentication
 */
class BasicAuthentication
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The password. It isn't returned in the responses. */
    public ?string $password = null;

    /** The username. */
    public ?string $username = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['password'])) {
            $this->password = $data['password'];
        }
        if (isset($data['username'])) {
            $this->username = $data['username'];
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
