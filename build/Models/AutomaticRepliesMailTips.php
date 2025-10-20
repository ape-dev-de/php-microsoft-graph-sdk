<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesMailTips
 */
class AutomaticRepliesMailTips
{
    /**
     * The automatic reply message.
     */
    private ?string $message;

    /**
     * The language that the automatic reply message is in.
     */
    private ?string $messageLanguage;

    /**
     * The date and time that automatic replies are set to end.
     */
    private ?string $scheduledEndTime;

    /**
     * The date and time that automatic replies are set to begin.
     */
    private ?string $scheduledStartTime;

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getMessageLanguage(): ?string
    {
        return $this->messageLanguage;
    }

    public function setMessageLanguage(?string $messageLanguage): self
    {
        $this->messageLanguage = $messageLanguage;
        return $this;
    }

    public function getScheduledEndTime(): ?string
    {
        return $this->scheduledEndTime;
    }

    public function setScheduledEndTime(?string $scheduledEndTime): self
    {
        $this->scheduledEndTime = $scheduledEndTime;
        return $this;
    }

    public function getScheduledStartTime(): ?string
    {
        return $this->scheduledStartTime;
    }

    public function setScheduledStartTime(?string $scheduledStartTime): self
    {
        $this->scheduledStartTime = $scheduledStartTime;
        return $this;
    }

}
