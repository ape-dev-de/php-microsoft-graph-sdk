<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLearningSummary
 */
class WindowsInformationProtectionAppLearningSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Application Name */
    public ?string $applicationName = null;

    /**  */
    public ?ApplicationType $applicationType = null;

    /** Device Count */
    public ?float $deviceCount = null;


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
        if (isset($data['applicationName'])) {
            $this->applicationName = $data['applicationName'];
        }
        if (isset($data['applicationType'])) {
            $this->applicationType = is_string($data['applicationType']) ? ApplicationType::tryFrom($data['applicationType']) : $data['applicationType'];
        }
        if (isset($data['deviceCount'])) {
            $this->deviceCount = is_numeric($data['deviceCount']) ? (float)$data['deviceCount'] : $data['deviceCount'];
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
