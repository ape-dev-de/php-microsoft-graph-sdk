<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewNotificationRecipientItem
 */
class AccessReviewNotificationRecipientItem
{
    /** 
     * Determines the recipient of the notification email.
     * @var AccessReviewNotificationRecipientScope|\stdClass|null
     */
    public mixed $notificationRecipientScope = null;

    /** Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients. */
    public ?string $notificationTemplateType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['notificationRecipientScope'])) {
            $this->notificationRecipientScope = $data['notificationRecipientScope'];
        }
        if (isset($data['notificationTemplateType'])) {
            $this->notificationTemplateType = $data['notificationTemplateType'];
        }
    }
}
