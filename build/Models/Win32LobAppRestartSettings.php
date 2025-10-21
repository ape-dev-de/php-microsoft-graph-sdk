<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRestartSettings
 */
class Win32LobAppRestartSettings
{
    /**
     * The number of minutes before the restart time to display the countdown dialog for pending restarts.
     */
    private ?float $countdownDisplayBeforeRestartInMinutes;

    /**
     * The number of minutes to wait before restarting the device after an app installation.
     */
    private ?float $gracePeriodInMinutes;

    /**
     * Contains properties describing restart coordination following an app installation.
     */
    private ?string $restartNotificationSnoozeDurationInMinutes;


    public function getCountdownDisplayBeforeRestartInMinutes(): ?float
    {
        return $this->countdownDisplayBeforeRestartInMinutes;
    }

    public function setCountdownDisplayBeforeRestartInMinutes(?float $countdownDisplayBeforeRestartInMinutes): self
    {
        $this->countdownDisplayBeforeRestartInMinutes = $countdownDisplayBeforeRestartInMinutes;
        return $this;
    }

    public function getGracePeriodInMinutes(): ?float
    {
        return $this->gracePeriodInMinutes;
    }

    public function setGracePeriodInMinutes(?float $gracePeriodInMinutes): self
    {
        $this->gracePeriodInMinutes = $gracePeriodInMinutes;
        return $this;
    }

    public function getRestartNotificationSnoozeDurationInMinutes(): ?string
    {
        return $this->restartNotificationSnoozeDurationInMinutes;
    }

    public function setRestartNotificationSnoozeDurationInMinutes(?string $restartNotificationSnoozeDurationInMinutes): self
    {
        $this->restartNotificationSnoozeDurationInMinutes = $restartNotificationSnoozeDurationInMinutes;
        return $this;
    }

}
