<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StoragePlanInformation
 */
class StoragePlanInformation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether there are higher storage quota plans available. Read-only. */
    public ?bool $upgradeAvailable = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['upgradeAvailable'])) {
            $this->upgradeAvailable = is_bool($data['upgradeAvailable']) ? $data['upgradeAvailable'] : (bool)$data['upgradeAvailable'];
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
