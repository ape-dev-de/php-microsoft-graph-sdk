<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupHistory
 */
class UserExperienceAnalyticsDeviceStartupHistory
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The device core boot time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $coreBootTimeInMs = null;

    /** The device core login time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $coreLoginTimeInMs = null;

    /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceId = null;

    /** The impact of device feature updates on boot time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $featureUpdateBootTimeInMs = null;

    /** The impact of device group policy client on boot time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $groupPolicyBootTimeInMs = null;

    /** The impact of device group policy client on login time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $groupPolicyLoginTimeInMs = null;

    /** When TRUE, indicates the device boot record is associated with feature updates. When FALSE, indicates the device boot record is not associated with feature updates. Supports: $select, $OrderBy. Read-only. */
    public ?bool $isFeatureUpdate = null;

    /** When TRUE, indicates the device login is the first login after a reboot. When FALSE, indicates the device login is not the first login after a reboot. Supports: $select, $OrderBy. Read-only. */
    public ?bool $isFirstLogin = null;

    /** The user experience analytics device boot record's operating system version. Supports: $select, $OrderBy. Read-only. */
    public ?string $operatingSystemVersion = null;

    /** The time for desktop to become responsive during login process in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $responsiveDesktopTimeInMs = null;

    /**  */
    public ?UserExperienceAnalyticsOperatingSystemRestartCategory $restartCategory = null;

    /** OS restart fault bucket. The fault bucket is used to find additional information about a system crash. Supports: $select, $OrderBy. Read-only. */
    public ?string $restartFaultBucket = null;

    /** OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason. Supports: $select, $OrderBy. Read-only. */
    public ?string $restartStopCode = null;

    /** The device boot start time. The value cannot be modified and is automatically populated when the device performs a reboot. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only. */
    public ?\DateTimeInterface $startTime = null;

    /** The device total boot time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $totalBootTimeInMs = null;

    /** The device total login time in milliseconds. Supports: $select, $OrderBy. Read-only. */
    public ?float $totalLoginTimeInMs = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['coreBootTimeInMs'])) {
            $this->coreBootTimeInMs = $data['coreBootTimeInMs'];
        }
        if (isset($data['coreLoginTimeInMs'])) {
            $this->coreLoginTimeInMs = $data['coreLoginTimeInMs'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['featureUpdateBootTimeInMs'])) {
            $this->featureUpdateBootTimeInMs = $data['featureUpdateBootTimeInMs'];
        }
        if (isset($data['groupPolicyBootTimeInMs'])) {
            $this->groupPolicyBootTimeInMs = $data['groupPolicyBootTimeInMs'];
        }
        if (isset($data['groupPolicyLoginTimeInMs'])) {
            $this->groupPolicyLoginTimeInMs = $data['groupPolicyLoginTimeInMs'];
        }
        if (isset($data['isFeatureUpdate'])) {
            $this->isFeatureUpdate = $data['isFeatureUpdate'];
        }
        if (isset($data['isFirstLogin'])) {
            $this->isFirstLogin = $data['isFirstLogin'];
        }
        if (isset($data['operatingSystemVersion'])) {
            $this->operatingSystemVersion = $data['operatingSystemVersion'];
        }
        if (isset($data['responsiveDesktopTimeInMs'])) {
            $this->responsiveDesktopTimeInMs = $data['responsiveDesktopTimeInMs'];
        }
        if (isset($data['restartCategory'])) {
            $this->restartCategory = $data['restartCategory'];
        }
        if (isset($data['restartFaultBucket'])) {
            $this->restartFaultBucket = $data['restartFaultBucket'];
        }
        if (isset($data['restartStopCode'])) {
            $this->restartStopCode = $data['restartStopCode'];
        }
        if (isset($data['startTime'])) {
            $this->startTime = $data['startTime'];
        }
        if (isset($data['totalBootTimeInMs'])) {
            $this->totalBootTimeInMs = $data['totalBootTimeInMs'];
        }
        if (isset($data['totalLoginTimeInMs'])) {
            $this->totalLoginTimeInMs = $data['totalLoginTimeInMs'];
        }
    }
}
