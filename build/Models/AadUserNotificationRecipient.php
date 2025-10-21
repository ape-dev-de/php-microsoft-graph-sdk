<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AadUserNotificationRecipient
 */
class AadUserNotificationRecipient
{
    public function __construct(
        /** Microsoft Entra user identifier. Use the List users method to get this ID. */
        public ?string $userId = null
    ) {}
}
