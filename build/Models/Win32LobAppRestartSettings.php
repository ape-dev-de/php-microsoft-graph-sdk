<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRestartSettings
 */
class Win32LobAppRestartSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The number of minutes before the restart time to display the countdown dialog for pending restarts. */
    public ?float $countdownDisplayBeforeRestartInMinutes = null;

    /** The number of minutes to wait before restarting the device after an app installation. */
    public ?float $gracePeriodInMinutes = null;

    /** The number of minutes to snooze the restart notification dialog when the snooze button is selected. */
    public ?float $restartNotificationSnoozeDurationInMinutes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['countdownDisplayBeforeRestartInMinutes'])) {
            $this->countdownDisplayBeforeRestartInMinutes = is_numeric($data['countdownDisplayBeforeRestartInMinutes']) ? (float)$data['countdownDisplayBeforeRestartInMinutes'] : $data['countdownDisplayBeforeRestartInMinutes'];
        }
        if (isset($data['gracePeriodInMinutes'])) {
            $this->gracePeriodInMinutes = is_numeric($data['gracePeriodInMinutes']) ? (float)$data['gracePeriodInMinutes'] : $data['gracePeriodInMinutes'];
        }
        if (isset($data['restartNotificationSnoozeDurationInMinutes'])) {
            $this->restartNotificationSnoozeDurationInMinutes = is_numeric($data['restartNotificationSnoozeDurationInMinutes']) ? (float)$data['restartNotificationSnoozeDurationInMinutes'] : $data['restartNotificationSnoozeDurationInMinutes'];
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
