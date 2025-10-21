<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewNotificationRecipientItem
 */
class AccessReviewNotificationRecipientItem
{
    public function __construct(
        /** Determines the recipient of the notification email. */
        public ?string $notificationRecipientScope = null,
        /** Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients. */
        public ?string $notificationTemplateType = null
    ) {}
}
