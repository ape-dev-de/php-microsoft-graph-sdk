<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcRestorePointSetting
 */
class CloudPcRestorePointSetting
{
    public function __construct(
        /** The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are: default, fourHours, sixHours, twelveHours, sixteenHours, twentyFourHours, unknownFutureValue. The default value is default that indicates that the time interval for automatic capturing of restore point snapshots is set to 12 hours. */
        public ?string $frequencyType = null,
        /** If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users can't use snapshots to restore the Cloud PC. */
        public ?bool $userRestoreEnabled = null
    ) {}
}
