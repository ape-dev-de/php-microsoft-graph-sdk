<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNetworkAdapter
 */
class SecurityNetworkAdapter
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the network adapter is selected for capturing and analyzing network traffic. */
    public ?bool $isEnabled = null;

    /** The name of the network adapter. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
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
