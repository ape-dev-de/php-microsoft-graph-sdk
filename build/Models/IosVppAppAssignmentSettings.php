<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppAppAssignmentSettings
 */
class IosVppAppAssignmentSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Whether or not to use device licensing. */
    public ?bool $useDeviceLicensing = null;

    /** The VPN Configuration Id to apply for this app. */
    public ?string $vpnConfigurationId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['useDeviceLicensing'])) {
            $this->useDeviceLicensing = is_bool($data['useDeviceLicensing']) ? $data['useDeviceLicensing'] : (bool)$data['useDeviceLicensing'];
        }
        if (isset($data['vpnConfigurationId'])) {
            $this->vpnConfigurationId = $data['vpnConfigurationId'];
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
