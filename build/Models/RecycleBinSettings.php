<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecycleBinSettings
 */
class RecycleBinSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Recycle bin retention period override in days for deleted content. The default value is 93; the value range is 7 to 180. The setting applies to newly deleted content only. Setting this property to null reverts to its default value. Read-write. */
    public ?float $retentionPeriodOverrideDays = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['retentionPeriodOverrideDays'])) {
            $this->retentionPeriodOverrideDays = is_numeric($data['retentionPeriodOverrideDays']) ? (float)$data['retentionPeriodOverrideDays'] : $data['retentionPeriodOverrideDays'];
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
