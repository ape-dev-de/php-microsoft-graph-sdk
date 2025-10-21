<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEmailSender
 */
class SecurityEmailSender
{
    /**
     * The name of the sender.
     */
    private ?string $displayName;

    /**
     * Sender domain.
     */
    private ?string $domainName;

    /**
     * Sender email address.
     */
    private ?string $emailAddress;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

}
