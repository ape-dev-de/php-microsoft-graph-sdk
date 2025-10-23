<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateScheduledInstall
 */
class WindowsUpdateScheduledInstall
{
    /**  */
    public ?WeeklySchedule $scheduledInstallDay = null;

    /** Scheduled Install Time during day */
    public ?string $scheduledInstallTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['scheduledInstallDay'])) {
            $this->scheduledInstallDay = $data['scheduledInstallDay'];
        }
        if (isset($data['scheduledInstallTime'])) {
            $this->scheduledInstallTime = $data['scheduledInstallTime'];
        }
    }
}
