<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRestartSettings
 */
class Win32LobAppRestartSettings
{
    public function __construct(
        /** The number of minutes before the restart time to display the countdown dialog for pending restarts. */
        public ?float $countdownDisplayBeforeRestartInMinutes = null,
        /** The number of minutes to wait before restarting the device after an app installation. */
        public ?float $gracePeriodInMinutes = null,
        /** The number of minutes to snooze the restart notification dialog when the snooze button is selected. */
        public ?float $restartNotificationSnoozeDurationInMinutes = null
    ) {}
}
