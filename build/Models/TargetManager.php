<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetManager
 */
class TargetManager
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Manager level, between 1 and 4. The direct manager is 1. */
    public ?float $managerLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['managerLevel'])) {
            $this->managerLevel = $data['managerLevel'];
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
