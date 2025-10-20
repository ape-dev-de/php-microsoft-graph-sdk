<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsAndConditionsAcceptanceStatus
 */
class TermsAndConditionsAcceptanceStatus
{
    /**
     * DateTime when the terms were last accepted by the user.
     */
    private ?\DateTimeInterface $acceptedDateTime;

    /**
     * Most recent version number of the T&C accepted by the user.
     */
    private ?float $acceptedVersion;

    /**
     * Display name of the user whose acceptance the entity represents.
     */
    private ?string $userDisplayName;

    /**
     * The userPrincipalName of the User that accepted the term.
     */
    private ?string $userPrincipalName;

    /**
     * A termsAndConditionsAcceptanceStatus entity represents the acceptance status of a given Terms and Conditions (T&C) policy by a given user. Users must accept the most up-to-date version of the terms in order to retain access to the Company Portal.
     */
    private ?string $termsAndConditions;

    public function getAcceptedDateTime(): ?\DateTimeInterface
    {
        return $this->acceptedDateTime;
    }

    public function setAcceptedDateTime(?\DateTimeInterface $acceptedDateTime): self
    {
        $this->acceptedDateTime = $acceptedDateTime;
        return $this;
    }

    public function getAcceptedVersion(): ?float
    {
        return $this->acceptedVersion;
    }

    public function setAcceptedVersion(?float $acceptedVersion): self
    {
        $this->acceptedVersion = $acceptedVersion;
        return $this;
    }

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

    public function getTermsAndConditions(): ?string
    {
        return $this->termsAndConditions;
    }

    public function setTermsAndConditions(?string $termsAndConditions): self
    {
        $this->termsAndConditions = $termsAndConditions;
        return $this;
    }

}
