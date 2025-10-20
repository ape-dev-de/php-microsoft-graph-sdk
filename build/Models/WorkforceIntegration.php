<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegration
 */
class WorkforceIntegration
{
    /**
     * API version for the callback URL. Start with 1.
     */
    private ?float $apiVersion;

    /**
     * Name of the workforce integration.
     */
    private ?string $displayName;

    /**
     * Support to view eligibility-filtered results. Possible values are: none, swapRequest, offerShiftRequest, unknownFutureValue, timeOffReason. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: timeOffReason.
     */
    private ?string $eligibilityFilteringEnabledEntities;

    /**
     * The workforce integration encryption resource.
     */
    private ?string $encryption;

    /**
     * Indicates whether this workforce integration is currently active and available.
     */
    private ?bool $isActive;

    /**
     * The Shifts entities supported for synchronous change notifications. Shifts call back to the provided URL when client changes occur to the entities specified in this property. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openShift, openShiftRequest, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard , timeOffReason , timeOff , timeOffRequest.
     */
    private ?string $supportedEntities;

    /**
     * Workforce Integration URL for callbacks from the Shifts service.
     */
    private ?string $url;

    public function getApiVersion(): ?float
    {
        return $this->apiVersion;
    }

    public function setApiVersion(?float $apiVersion): self
    {
        $this->apiVersion = $apiVersion;
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

    public function getEligibilityFilteringEnabledEntities(): ?string
    {
        return $this->eligibilityFilteringEnabledEntities;
    }

    public function setEligibilityFilteringEnabledEntities(?string $eligibilityFilteringEnabledEntities): self
    {
        $this->eligibilityFilteringEnabledEntities = $eligibilityFilteringEnabledEntities;
        return $this;
    }

    public function getEncryption(): ?string
    {
        return $this->encryption;
    }

    public function setEncryption(?string $encryption): self
    {
        $this->encryption = $encryption;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getSupportedEntities(): ?string
    {
        return $this->supportedEntities;
    }

    public function setSupportedEntities(?string $supportedEntities): self
    {
        $this->supportedEntities = $supportedEntities;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
