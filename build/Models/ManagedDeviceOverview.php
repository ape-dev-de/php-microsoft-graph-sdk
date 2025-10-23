<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceOverview
 */
class ManagedDeviceOverview
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deviceExchangeAccessStateSummary'])) {
            $this->deviceExchangeAccessStateSummary = $data['deviceExchangeAccessStateSummary'];
        }
        if (isset($data['deviceOperatingSystemSummary'])) {
            $this->deviceOperatingSystemSummary = $data['deviceOperatingSystemSummary'];
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
}
