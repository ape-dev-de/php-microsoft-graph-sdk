<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailPayloadDetail
 */
class EmailPayloadDetail
{
    /**
     * Email address of the user.
     */
    private ?string $fromEmail;

    /**
     * Display name of the user.
     */
    private ?string $fromName;

    /**
     * Indicates whether the sender isn't from the user's organization.
     */
    private ?bool $isExternalSender;

    /**
     * The subject of the email address sent to the user.
     */
    private ?string $subject;

    public function getFromEmail(): ?string
    {
        return $this->fromEmail;
    }

    public function setFromEmail(?string $fromEmail): self
    {
        $this->fromEmail = $fromEmail;
        return $this;
    }

    public function getFromName(): ?string
    {
        return $this->fromName;
    }

    public function setFromName(?string $fromName): self
    {
        $this->fromName = $fromName;
        return $this;
    }

    public function getIsExternalSender(): ?bool
    {
        return $this->isExternalSender;
    }

    public function setIsExternalSender(?bool $isExternalSender): self
    {
        $this->isExternalSender = $isExternalSender;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

}
