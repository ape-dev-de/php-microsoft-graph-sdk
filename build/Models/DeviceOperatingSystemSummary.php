<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceOperatingSystemSummary
 */
class DeviceOperatingSystemSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647 */
    public ?float $androidCorporateWorkProfileCount = null;

    /** Number of android device count. */
    public ?float $androidCount = null;

    /** Number of dedicated Android devices. */
    public ?float $androidDedicatedCount = null;

    /** Number of device admin Android devices. */
    public ?float $androidDeviceAdminCount = null;

    /** Number of fully managed Android devices. */
    public ?float $androidFullyManagedCount = null;

    /** Number of work profile Android devices. */
    public ?float $androidWorkProfileCount = null;

    /** Number of ConfigMgr managed devices. */
    public ?float $configMgrDeviceCount = null;

    /** Number of iOS device count. */
    public ?float $iosCount = null;

    /** Number of Mac OS X device count. */
    public ?float $macOSCount = null;

    /** Number of unknown device count. */
    public ?float $unknownCount = null;

    /** Number of Windows device count. */
    public ?float $windowsCount = null;

    /** Number of Windows mobile device count. */
    public ?float $windowsMobileCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['androidCorporateWorkProfileCount'])) {
            $this->androidCorporateWorkProfileCount = $data['androidCorporateWorkProfileCount'];
        }
        if (isset($data['androidCount'])) {
            $this->androidCount = $data['androidCount'];
        }
        if (isset($data['androidDedicatedCount'])) {
            $this->androidDedicatedCount = $data['androidDedicatedCount'];
        }
        if (isset($data['androidDeviceAdminCount'])) {
            $this->androidDeviceAdminCount = $data['androidDeviceAdminCount'];
        }
        if (isset($data['androidFullyManagedCount'])) {
            $this->androidFullyManagedCount = $data['androidFullyManagedCount'];
        }
        if (isset($data['androidWorkProfileCount'])) {
            $this->androidWorkProfileCount = $data['androidWorkProfileCount'];
        }
        if (isset($data['configMgrDeviceCount'])) {
            $this->configMgrDeviceCount = $data['configMgrDeviceCount'];
        }
        if (isset($data['iosCount'])) {
            $this->iosCount = $data['iosCount'];
        }
        if (isset($data['macOSCount'])) {
            $this->macOSCount = $data['macOSCount'];
        }
        if (isset($data['unknownCount'])) {
            $this->unknownCount = $data['unknownCount'];
        }
        if (isset($data['windowsCount'])) {
            $this->windowsCount = $data['windowsCount'];
        }
        if (isset($data['windowsMobileCount'])) {
            $this->windowsMobileCount = $data['windowsMobileCount'];
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
