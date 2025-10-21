<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingNotificationSetting
 */
class TrainingNotificationSetting
{
    public function __construct(
        /** Notification preference. Possible values are: unknown, microsoft, custom, unknownFutureValue. */
        public ?EndUserNotificationPreference $notificationPreference = null,
        /** Positive reinforcement detail. */
        public ?PositiveReinforcementNotification $positiveReinforcement = null,
        /** End user notification type. Possible values are: unknown, noTraining, trainingSelected, noNotification, unknownFutureValue. */
        public ?EndUserNotificationSettingType $settingType = null,
        /** Training assignment details. */
        public ?BaseEndUserNotification $trainingAssignment = null,
        /** Training reminder details. */
        public ?TrainingReminderNotification $trainingReminder = null
    ) {}
}
