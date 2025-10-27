<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionChannelEmailResult
 */
class ProvisionChannelEmailResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Represents the provisioned email address. */
    public ?string $email = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['email'])) {
            $this->email = $data['email'];
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
