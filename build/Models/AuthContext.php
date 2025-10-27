<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthContext
 */
class AuthContext
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Supported values are c1 through c99. */
    public ?string $authenticationContextValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['authenticationContextValue'])) {
            $this->authenticationContextValue = $data['authenticationContextValue'];
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
