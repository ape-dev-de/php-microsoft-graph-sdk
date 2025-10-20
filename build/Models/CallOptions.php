<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallOptions
 */
class CallOptions
{
    /**
     * Indicates whether to hide the app after the call is escalated.
     */
    private ?bool $hideBotAfterEscalation;

    /**
     * Indicates whether content sharing notifications should be enabled for the call.
     */
    private ?bool $isContentSharingNotificationEnabled;

    /**
     * Indicates whether delta roster is enabled for the call.
     */
    private ?bool $isDeltaRosterEnabled;

    /**
     * Indicates whether delta roster filtering by participant interactivity is enabled.
     */
    private ?string $isInteractiveRosterEnabled;

    public function getHideBotAfterEscalation(): ?bool
    {
        return $this->hideBotAfterEscalation;
    }

    public function setHideBotAfterEscalation(?bool $hideBotAfterEscalation): self
    {
        $this->hideBotAfterEscalation = $hideBotAfterEscalation;
        return $this;
    }

    public function getIsContentSharingNotificationEnabled(): ?bool
    {
        return $this->isContentSharingNotificationEnabled;
    }

    public function setIsContentSharingNotificationEnabled(?bool $isContentSharingNotificationEnabled): self
    {
        $this->isContentSharingNotificationEnabled = $isContentSharingNotificationEnabled;
        return $this;
    }

    public function getIsDeltaRosterEnabled(): ?bool
    {
        return $this->isDeltaRosterEnabled;
    }

    public function setIsDeltaRosterEnabled(?bool $isDeltaRosterEnabled): self
    {
        $this->isDeltaRosterEnabled = $isDeltaRosterEnabled;
        return $this;
    }

    public function getIsInteractiveRosterEnabled(): ?string
    {
        return $this->isInteractiveRosterEnabled;
    }

    public function setIsInteractiveRosterEnabled(?string $isInteractiveRosterEnabled): self
    {
        $this->isInteractiveRosterEnabled = $isInteractiveRosterEnabled;
        return $this;
    }

}
