<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceManagementPartner
 */
class ComplianceManagementPartner
{
    /**
     * User groups which enroll Android devices through partner.
     */
    private array $androidEnrollmentAssignments = [];

    /**
     * Partner onboarded for Android devices.
     */
    private ?bool $androidOnboarded;

    /**
     * Partner display name
     */
    private ?string $displayName;

    /**
     * User groups which enroll ios devices through partner.
     */
    private array $iosEnrollmentAssignments = [];

    /**
     * Partner onboarded for ios devices.
     */
    private ?bool $iosOnboarded;

    /**
     * Timestamp of last heartbeat after admin onboarded to the compliance management partner
     */
    private ?\DateTimeInterface $lastHeartbeatDateTime;

    /**
     * User groups which enroll Mac devices through partner.
     */
    private array $macOsEnrollmentAssignments = [];

    /**
     * Partner onboarded for Mac devices.
     */
    private ?bool $macOsOnboarded;

    /**
     * Compliance management partner for all platforms
     */
    private ?string $partnerState;

    public function getAndroidEnrollmentAssignments(): array
    {
        return $this->androidEnrollmentAssignments;
    }

    public function setAndroidEnrollmentAssignments(array $androidEnrollmentAssignments): self
    {
        $this->androidEnrollmentAssignments = $androidEnrollmentAssignments;
        return $this;
    }

    public function getAndroidOnboarded(): ?bool
    {
        return $this->androidOnboarded;
    }

    public function setAndroidOnboarded(?bool $androidOnboarded): self
    {
        $this->androidOnboarded = $androidOnboarded;
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

    public function getIosEnrollmentAssignments(): array
    {
        return $this->iosEnrollmentAssignments;
    }

    public function setIosEnrollmentAssignments(array $iosEnrollmentAssignments): self
    {
        $this->iosEnrollmentAssignments = $iosEnrollmentAssignments;
        return $this;
    }

    public function getIosOnboarded(): ?bool
    {
        return $this->iosOnboarded;
    }

    public function setIosOnboarded(?bool $iosOnboarded): self
    {
        $this->iosOnboarded = $iosOnboarded;
        return $this;
    }

    public function getLastHeartbeatDateTime(): ?\DateTimeInterface
    {
        return $this->lastHeartbeatDateTime;
    }

    public function setLastHeartbeatDateTime(?\DateTimeInterface $lastHeartbeatDateTime): self
    {
        $this->lastHeartbeatDateTime = $lastHeartbeatDateTime;
        return $this;
    }

    public function getMacOsEnrollmentAssignments(): array
    {
        return $this->macOsEnrollmentAssignments;
    }

    public function setMacOsEnrollmentAssignments(array $macOsEnrollmentAssignments): self
    {
        $this->macOsEnrollmentAssignments = $macOsEnrollmentAssignments;
        return $this;
    }

    public function getMacOsOnboarded(): ?bool
    {
        return $this->macOsOnboarded;
    }

    public function setMacOsOnboarded(?bool $macOsOnboarded): self
    {
        $this->macOsOnboarded = $macOsOnboarded;
        return $this;
    }

    public function getPartnerState(): ?string
    {
        return $this->partnerState;
    }

    public function setPartnerState(?string $partnerState): self
    {
        $this->partnerState = $partnerState;
        return $this;
    }

}
