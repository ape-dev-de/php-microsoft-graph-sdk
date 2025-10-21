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
     */
    private ?string $notificationRecipientScope;

    /**
     * Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients.
     */
    private ?string $notificationTemplateType;


    public function getNotificationRecipientScope(): ?string
    {
        return $this->notificationRecipientScope;
    }

    public function setNotificationRecipientScope(?string $notificationRecipientScope): self
    {
        $this->notificationRecipientScope = $notificationRecipientScope;
        return $this;
    }

    public function getNotificationTemplateType(): ?string
    {
        return $this->notificationTemplateType;
    }

    public function setNotificationTemplateType(?string $notificationTemplateType): self
    {
        $this->notificationTemplateType = $notificationTemplateType;
        return $this;
    }

}
