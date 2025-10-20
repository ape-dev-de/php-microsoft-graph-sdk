<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupLifecyclePolicy
 */
class GroupLifecyclePolicy
{
    /**
     * List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon.
     */
    private ?string $alternateNotificationEmails;

    /**
     * Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined.
     */
    private ?float $groupLifetimeInDays;

    /**
     * The group type for which the expiration policy applies. Possible values are All, Selected or None.
     */
    private ?string $managedGroupTypes;

    public function getAlternateNotificationEmails(): ?string
    {
        return $this->alternateNotificationEmails;
    }

    public function setAlternateNotificationEmails(?string $alternateNotificationEmails): self
    {
        $this->alternateNotificationEmails = $alternateNotificationEmails;
        return $this;
    }

    public function getGroupLifetimeInDays(): ?float
    {
        return $this->groupLifetimeInDays;
    }

    public function setGroupLifetimeInDays(?float $groupLifetimeInDays): self
    {
        $this->groupLifetimeInDays = $groupLifetimeInDays;
        return $this;
    }

    public function getManagedGroupTypes(): ?string
    {
        return $this->managedGroupTypes;
    }

    public function setManagedGroupTypes(?string $managedGroupTypes): self
    {
        $this->managedGroupTypes = $managedGroupTypes;
        return $this;
    }

}
