<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteAssistancePartner
 */
class RemoteAssistancePartner
{
    /**
     * Display name of the partner.
     */
    private ?string $displayName;

    /**
     * Timestamp of the last request sent to Intune by the TEM partner.
     */
    private ?\DateTimeInterface $lastConnectionDateTime;

    /**
     */
    private ?string $onboardingStatus;

    /**
     * RemoteAssistPartner resources represent the metadata and status of a given Remote Assistance partner service.
     */
    private ?string $onboardingUrl;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLastConnectionDateTime(): ?\DateTimeInterface
    {
        return $this->lastConnectionDateTime;
    }

    public function setLastConnectionDateTime(?\DateTimeInterface $lastConnectionDateTime): self
    {
        $this->lastConnectionDateTime = $lastConnectionDateTime;
        return $this;
    }

    public function getOnboardingStatus(): ?string
    {
        return $this->onboardingStatus;
    }

    public function setOnboardingStatus(?string $onboardingStatus): self
    {
        $this->onboardingStatus = $onboardingStatus;
        return $this;
    }

    public function getOnboardingUrl(): ?string
    {
        return $this->onboardingUrl;
    }

    public function setOnboardingUrl(?string $onboardingUrl): self
    {
        $this->onboardingUrl = $onboardingUrl;
        return $this;
    }

}
