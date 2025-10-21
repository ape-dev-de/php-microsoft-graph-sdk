<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesSetting
 */
class AutomaticRepliesSetting
{
    /**
     * The set of audience external to the signed-in user''s organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
     */
    private ?string $externalAudience;

    /**
     * The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
     */
    private ?string $externalReplyMessage;

    /**
     * The automatic reply to send to the audience internal to the signed-in user''s organization, if Status is AlwaysEnabled or Scheduled.
     */
    private ?string $internalReplyMessage;

    /**
     * The date and time that automatic replies are set to end, if Status is set to Scheduled.
     */
    private ?string $scheduledEndDateTime;

    /**
     * The date and time that automatic replies are set to begin, if Status is set to Scheduled.
     */
    private ?string $scheduledStartDateTime;

    /**
     * Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
     */
    private ?string $status;


    public function getExternalAudience(): ?string
    {
        return $this->externalAudience;
    }

    public function setExternalAudience(?string $externalAudience): self
    {
        $this->externalAudience = $externalAudience;
        return $this;
    }

    public function getExternalReplyMessage(): ?string
    {
        return $this->externalReplyMessage;
    }

    public function setExternalReplyMessage(?string $externalReplyMessage): self
    {
        $this->externalReplyMessage = $externalReplyMessage;
        return $this;
    }

    public function getInternalReplyMessage(): ?string
    {
        return $this->internalReplyMessage;
    }

    public function setInternalReplyMessage(?string $internalReplyMessage): self
    {
        $this->internalReplyMessage = $internalReplyMessage;
        return $this;
    }

    public function getScheduledEndDateTime(): ?string
    {
        return $this->scheduledEndDateTime;
    }

    public function setScheduledEndDateTime(?string $scheduledEndDateTime): self
    {
        $this->scheduledEndDateTime = $scheduledEndDateTime;
        return $this;
    }

    public function getScheduledStartDateTime(): ?string
    {
        return $this->scheduledStartDateTime;
    }

    public function setScheduledStartDateTime(?string $scheduledStartDateTime): self
    {
        $this->scheduledStartDateTime = $scheduledStartDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
