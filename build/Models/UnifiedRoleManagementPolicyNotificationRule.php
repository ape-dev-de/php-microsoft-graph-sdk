<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyNotificationRule
 */
class UnifiedRoleManagementPolicyNotificationRule
{
    /**
     * Indicates whether a default recipient will receive the notification email.
     */
    private ?bool $isDefaultRecipientsEnabled;

    /**
     * The level of notification. The possible values are None, Critical, All.
     */
    private ?string $notificationLevel;

    /**
     * The list of recipients of the email notifications.
     */
    private ?string $notificationRecipients;

    /**
     * The type of notification. Only Email is supported.
     */
    private ?string $notificationType;

    /**
     * The type of recipient of the notification. The possible values are Requestor, Approver, Admin.
     */
    private ?string $recipientType;

    public function getIsDefaultRecipientsEnabled(): ?bool
    {
        return $this->isDefaultRecipientsEnabled;
    }

    public function setIsDefaultRecipientsEnabled(?bool $isDefaultRecipientsEnabled): self
    {
        $this->isDefaultRecipientsEnabled = $isDefaultRecipientsEnabled;
        return $this;
    }

    public function getNotificationLevel(): ?string
    {
        return $this->notificationLevel;
    }

    public function setNotificationLevel(?string $notificationLevel): self
    {
        $this->notificationLevel = $notificationLevel;
        return $this;
    }

    public function getNotificationRecipients(): ?string
    {
        return $this->notificationRecipients;
    }

    public function setNotificationRecipients(?string $notificationRecipients): self
    {
        $this->notificationRecipients = $notificationRecipients;
        return $this;
    }

    public function getNotificationType(): ?string
    {
        return $this->notificationType;
    }

    public function setNotificationType(?string $notificationType): self
    {
        $this->notificationType = $notificationType;
        return $this;
    }

    public function getRecipientType(): ?string
    {
        return $this->recipientType;
    }

    public function setRecipientType(?string $recipientType): self
    {
        $this->recipientType = $recipientType;
        return $this;
    }

}
