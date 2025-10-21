<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingReminderNotification
 */
class TrainingReminderNotification
{
    public function __construct(
        /** The default language for the end user notification. */
        public ?string $defaultLanguage = null,
        /**  */
        public ?EndUserNotification $endUserNotification = null,
        /** Configurable frequency for the reminder email introduced during simulation creation. Possible values are: unknown, weekly, biWeekly, unknownFutureValue. */
        public ?NotificationDeliveryFrequency $deliveryFrequency = null
    ) {}
}
