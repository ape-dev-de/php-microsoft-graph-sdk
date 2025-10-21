<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingReminderNotification
 */
class TrainingReminderNotification
{
    public function __construct(
        /** Configurable frequency for the reminder email introduced during simulation creation. Possible values are: unknown, weekly, biWeekly, unknownFutureValue. */
        public ?string $deliveryFrequency = null
    ) {}
}
