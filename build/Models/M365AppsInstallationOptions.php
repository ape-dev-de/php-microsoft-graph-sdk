<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * M365AppsInstallationOptions
 */
class M365AppsInstallationOptions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?AppsInstallationOptionsForMac $appsForMac = null;

    /**  */
    public ?AppsInstallationOptionsForWindows $appsForWindows = null;

    /**  */
    public ?AppsUpdateChannelType $updateChannel = null;


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
        if (isset($data['appsForMac'])) {
            $this->appsForMac = is_array($data['appsForMac']) ? new AppsInstallationOptionsForMac($data['appsForMac']) : $data['appsForMac'];
        }
        if (isset($data['appsForWindows'])) {
            $this->appsForWindows = is_array($data['appsForWindows']) ? new AppsInstallationOptionsForWindows($data['appsForWindows']) : $data['appsForWindows'];
        }
        if (isset($data['updateChannel'])) {
            $this->updateChannel = is_string($data['updateChannel']) ? AppsUpdateChannelType::tryFrom($data['updateChannel']) : $data['updateChannel'];
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
