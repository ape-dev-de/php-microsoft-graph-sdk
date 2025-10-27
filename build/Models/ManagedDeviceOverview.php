<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceOverview
 */
class ManagedDeviceOverview
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Distribution of Exchange Access State in Intune
     * @var DeviceExchangeAccessStateSummary|\stdClass|null
     */
    public mixed $deviceExchangeAccessStateSummary = null;

    /** 
     * Device operating system summary.
     * @var DeviceOperatingSystemSummary|\stdClass|null
     */
    public mixed $deviceOperatingSystemSummary = null;

    /** The number of devices enrolled in both MDM and EAS */
    public ?float $dualEnrolledDeviceCount = null;

    /** Total enrolled device count. Does not include PC devices managed via Intune PC Agent */
    public ?float $enrolledDeviceCount = null;

    /** The number of devices enrolled in MDM */
    public ?float $mdmEnrolledCount = null;


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
        if (isset($data['deviceExchangeAccessStateSummary'])) {
            $this->deviceExchangeAccessStateSummary = is_array($data['deviceExchangeAccessStateSummary']) ? new DeviceExchangeAccessStateSummary($data['deviceExchangeAccessStateSummary']) : $data['deviceExchangeAccessStateSummary'];
        }
        if (isset($data['deviceOperatingSystemSummary'])) {
            $this->deviceOperatingSystemSummary = is_array($data['deviceOperatingSystemSummary']) ? new DeviceOperatingSystemSummary($data['deviceOperatingSystemSummary']) : $data['deviceOperatingSystemSummary'];
        }
        if (isset($data['dualEnrolledDeviceCount'])) {
            $this->dualEnrolledDeviceCount = $data['dualEnrolledDeviceCount'];
        }
        if (isset($data['enrolledDeviceCount'])) {
            $this->enrolledDeviceCount = $data['enrolledDeviceCount'];
        }
        if (isset($data['mdmEnrolledCount'])) {
            $this->mdmEnrolledCount = $data['mdmEnrolledCount'];
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
