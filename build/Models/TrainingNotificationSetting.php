<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingNotificationSetting
 */
class TrainingNotificationSetting
{
    public function __construct(
        /** Training assignment details. */
        public ?string $trainingAssignment = null,
        /** Training reminder details. */
        public ?string $trainingReminder = null
    ) {}
}
