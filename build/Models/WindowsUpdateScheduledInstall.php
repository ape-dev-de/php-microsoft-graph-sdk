<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateScheduledInstall
 */
class WindowsUpdateScheduledInstall
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['scheduledInstallDay'])) {
            $this->scheduledInstallDay = is_string($data['scheduledInstallDay']) ? WeeklySchedule::tryFrom($data['scheduledInstallDay']) : $data['scheduledInstallDay'];
        }
        if (isset($data['scheduledInstallTime'])) {
            $this->scheduledInstallTime = $data['scheduledInstallTime'];
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
