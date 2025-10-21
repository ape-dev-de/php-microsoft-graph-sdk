<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceOperatingSystemSummary
 */
class DeviceOperatingSystemSummary
{
    public function __construct(
        /** The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647 */
        public ?float $androidCorporateWorkProfileCount = null,
        /** Number of android device count. */
        public ?float $androidCount = null,
        /** Number of dedicated Android devices. */
        public ?float $androidDedicatedCount = null,
        /** Number of device admin Android devices. */
        public ?float $androidDeviceAdminCount = null,
        /** Number of fully managed Android devices. */
        public ?float $androidFullyManagedCount = null,
        /** Number of work profile Android devices. */
        public ?float $androidWorkProfileCount = null,
        /** Number of ConfigMgr managed devices. */
        public ?float $configMgrDeviceCount = null,
        /** Number of iOS device count. */
        public ?float $iosCount = null,
        /** Number of Mac OS X device count. */
        public ?float $macOSCount = null,
        /** Number of unknown device count. */
        public ?float $unknownCount = null,
        /** Number of Windows device count. */
        public ?float $windowsCount = null,
        /** Device operating system summary. */
        public ?string $windowsMobileCount = null
    ) {}
}
