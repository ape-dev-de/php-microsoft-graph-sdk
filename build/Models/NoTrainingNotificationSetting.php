<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NoTrainingNotificationSetting
 */
class NoTrainingNotificationSetting
{
    public function __construct(
        /** The notification for the user who is part of the simulation. */
        public ?string $simulationNotification = null
    ) {}
}
