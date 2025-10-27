<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceExchangeAccessStateSummary
 */
class DeviceExchangeAccessStateSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Total count of devices with Exchange Access State: Allowed. */
    public ?float $allowedDeviceCount = null;

    /** Total count of devices with Exchange Access State: Blocked. */
    public ?float $blockedDeviceCount = null;

    /** Total count of devices with Exchange Access State: Quarantined. */
    public ?float $quarantinedDeviceCount = null;

    /** Total count of devices for which no Exchange Access State could be found. */
    public ?float $unavailableDeviceCount = null;

    /** Total count of devices with Exchange Access State: Unknown. */
    public ?float $unknownDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowedDeviceCount'])) {
            $this->allowedDeviceCount = is_numeric($data['allowedDeviceCount']) ? (float)$data['allowedDeviceCount'] : $data['allowedDeviceCount'];
        }
        if (isset($data['blockedDeviceCount'])) {
            $this->blockedDeviceCount = is_numeric($data['blockedDeviceCount']) ? (float)$data['blockedDeviceCount'] : $data['blockedDeviceCount'];
        }
        if (isset($data['quarantinedDeviceCount'])) {
            $this->quarantinedDeviceCount = is_numeric($data['quarantinedDeviceCount']) ? (float)$data['quarantinedDeviceCount'] : $data['quarantinedDeviceCount'];
        }
        if (isset($data['unavailableDeviceCount'])) {
            $this->unavailableDeviceCount = is_numeric($data['unavailableDeviceCount']) ? (float)$data['unavailableDeviceCount'] : $data['unavailableDeviceCount'];
        }
        if (isset($data['unknownDeviceCount'])) {
            $this->unknownDeviceCount = is_numeric($data['unknownDeviceCount']) ? (float)$data['unknownDeviceCount'] : $data['unknownDeviceCount'];
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
