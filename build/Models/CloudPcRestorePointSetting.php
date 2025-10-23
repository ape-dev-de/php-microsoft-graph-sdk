<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcRestorePointSetting
 */
class CloudPcRestorePointSetting
{
    /** 
     * The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are: default, fourHours, sixHours, twelveHours, sixteenHours, twentyFourHours, unknownFutureValue. The default value is default that indicates that the time interval for automatic capturing of restore point snapshots is set to 12 hours.
     * @var CloudPcRestorePointFrequencyType|\stdClass|null
     */
    public mixed $frequencyType = null;

    /** If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users can't use snapshots to restore the Cloud PC. */
    public ?bool $userRestoreEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['frequencyType'])) {
            $this->frequencyType = is_array($data['frequencyType']) ? new CloudPcRestorePointFrequencyType($data['frequencyType']) : $data['frequencyType'];
        }
        if (isset($data['userRestoreEnabled'])) {
            $this->userRestoreEnabled = $data['userRestoreEnabled'];
        }
    }
}
