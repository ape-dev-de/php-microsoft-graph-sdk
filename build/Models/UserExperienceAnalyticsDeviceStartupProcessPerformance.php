<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupProcessPerformance
 */
class UserExperienceAnalyticsDeviceStartupProcessPerformance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The count of devices which initiated this process on startup. Supports: $filter, $select, $OrderBy. Read-only. */
    public ?float $deviceCount = null;

    /** The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only. */
    public ?float $medianImpactInMs = null;

    /** The name of the startup process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only. */
    public ?string $processName = null;

    /** The product name of the startup process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only. */
    public ?string $productName = null;

    /** The publisher of the startup process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only. */
    public ?string $publisher = null;

    /** The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only. */
    public ?float $totalImpactInMs = null;


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
        if (isset($data['deviceCount'])) {
            $this->deviceCount = is_numeric($data['deviceCount']) ? (float)$data['deviceCount'] : $data['deviceCount'];
        }
        if (isset($data['medianImpactInMs'])) {
            $this->medianImpactInMs = is_numeric($data['medianImpactInMs']) ? (float)$data['medianImpactInMs'] : $data['medianImpactInMs'];
        }
        if (isset($data['processName'])) {
            $this->processName = $data['processName'];
        }
        if (isset($data['productName'])) {
            $this->productName = $data['productName'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['totalImpactInMs'])) {
            $this->totalImpactInMs = is_numeric($data['totalImpactInMs']) ? (float)$data['totalImpactInMs'] : $data['totalImpactInMs'];
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
