<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RelatedContact
 */
class RelatedContact
{
    /**
     * Indicates whether the user has been consented to access student data.
     */
    private ?bool $accessConsent;

    /**
     * Name of the contact. Required.
     */
    private ?string $displayName;

    /**
     * Primary email address of the contact. Required.
     */
    private ?string $emailAddress;

    /**
     * Mobile phone number of the contact.
     */
    private ?string $mobilePhone;

    /**
     */
    private ?string $relationship;


    public function getAccessConsent(): ?bool
    {
        return $this->accessConsent;
    }

    public function setAccessConsent(?bool $accessConsent): self
    {
        $this->accessConsent = $accessConsent;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function getRelationship(): ?string
    {
        return $this->relationship;
    }

    public function setRelationship(?string $relationship): self
    {
        $this->relationship = $relationship;
        return $this;
    }

}
