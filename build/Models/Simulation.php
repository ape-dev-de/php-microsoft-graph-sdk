<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Simulation
 */
class Simulation
{
    /**
     * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
     */
    private ?string $attackTechnique;

    /**
     * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     */
    private ?string $attackType;

    /**
     * Unique identifier for the attack simulation automation.
     */
    private ?string $automationId;

    /**
     * Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby.
     */
    private ?\DateTimeInterface $completionDateTime;

    /**
     * Identity of the user who created the attack simulation and training campaign.
     */
    private ?string $createdBy;

    /**
     * Date and time of creation of the attack simulation and training campaign.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description of the attack simulation and training campaign.
     */
    private ?string $description;

    /**
     * Display name of the attack simulation and training campaign. Supports $filter and $orderby.
     */
    private ?string $displayName;

    /**
     * Simulation duration in days.
     */
    private ?float $durationInDays;

    /**
     * Details about the end user notification setting.
     */
    private ?string $endUserNotificationSetting;

    /**
     * Users excluded from the simulation.
     */
    private ?string $excludedAccountTarget;

    /**
     * Users targeted in the simulation.
     */
    private ?string $includedAccountTarget;

    /**
     * Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby.
     */
    private ?bool $isAutomated;

    /**
     * Identity of the user who most recently modified the attack simulation and training campaign.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time of the most recent modification of the attack simulation and training campaign.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby.
     */
    private ?\DateTimeInterface $launchDateTime;

    /**
     * OAuth app details for the OAuth technique.
     */
    private ?string $oAuthConsentAppDetail;

    /**
     * Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     */
    private ?string $payloadDeliveryPlatform;

    /**
     * Report of the attack simulation and training campaign.
     */
    private ?string $report;

    /**
     * Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
     */
    private ?string $status;

    /**
     * Details about the training settings for a simulation.
     */
    private ?string $trainingSetting;

    /**
     * The landing page associated with a simulation during its creation.
     */
    private ?string $landingPage;

    /**
     * The login page associated with a simulation during its creation.
     */
    private ?string $loginPage;

    /**
     * The payload associated with a simulation during its creation.
     */
    private ?string $payload;

    public function getAttackTechnique(): ?string
    {
        return $this->attackTechnique;
    }

    public function setAttackTechnique(?string $attackTechnique): self
    {
        $this->attackTechnique = $attackTechnique;
        return $this;
    }

    public function getAttackType(): ?string
    {
        return $this->attackType;
    }

    public function setAttackType(?string $attackType): self
    {
        $this->attackType = $attackType;
        return $this;
    }

    public function getAutomationId(): ?string
    {
        return $this->automationId;
    }

    public function setAutomationId(?string $automationId): self
    {
        $this->automationId = $automationId;
        return $this;
    }

    public function getCompletionDateTime(): ?\DateTimeInterface
    {
        return $this->completionDateTime;
    }

    public function setCompletionDateTime(?\DateTimeInterface $completionDateTime): self
    {
        $this->completionDateTime = $completionDateTime;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getDurationInDays(): ?float
    {
        return $this->durationInDays;
    }

    public function setDurationInDays(?float $durationInDays): self
    {
        $this->durationInDays = $durationInDays;
        return $this;
    }

    public function getEndUserNotificationSetting(): ?string
    {
        return $this->endUserNotificationSetting;
    }

    public function setEndUserNotificationSetting(?string $endUserNotificationSetting): self
    {
        $this->endUserNotificationSetting = $endUserNotificationSetting;
        return $this;
    }

    public function getExcludedAccountTarget(): ?string
    {
        return $this->excludedAccountTarget;
    }

    public function setExcludedAccountTarget(?string $excludedAccountTarget): self
    {
        $this->excludedAccountTarget = $excludedAccountTarget;
        return $this;
    }

    public function getIncludedAccountTarget(): ?string
    {
        return $this->includedAccountTarget;
    }

    public function setIncludedAccountTarget(?string $includedAccountTarget): self
    {
        $this->includedAccountTarget = $includedAccountTarget;
        return $this;
    }

    public function getIsAutomated(): ?bool
    {
        return $this->isAutomated;
    }

    public function setIsAutomated(?bool $isAutomated): self
    {
        $this->isAutomated = $isAutomated;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getLaunchDateTime(): ?\DateTimeInterface
    {
        return $this->launchDateTime;
    }

    public function setLaunchDateTime(?\DateTimeInterface $launchDateTime): self
    {
        $this->launchDateTime = $launchDateTime;
        return $this;
    }

    public function getOAuthConsentAppDetail(): ?string
    {
        return $this->oAuthConsentAppDetail;
    }

    public function setOAuthConsentAppDetail(?string $oAuthConsentAppDetail): self
    {
        $this->oAuthConsentAppDetail = $oAuthConsentAppDetail;
        return $this;
    }

    public function getPayloadDeliveryPlatform(): ?string
    {
        return $this->payloadDeliveryPlatform;
    }

    public function setPayloadDeliveryPlatform(?string $payloadDeliveryPlatform): self
    {
        $this->payloadDeliveryPlatform = $payloadDeliveryPlatform;
        return $this;
    }

    public function getReport(): ?string
    {
        return $this->report;
    }

    public function setReport(?string $report): self
    {
        $this->report = $report;
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

    public function getTrainingSetting(): ?string
    {
        return $this->trainingSetting;
    }

    public function setTrainingSetting(?string $trainingSetting): self
    {
        $this->trainingSetting = $trainingSetting;
        return $this;
    }

    public function getLandingPage(): ?string
    {
        return $this->landingPage;
    }

    public function setLandingPage(?string $landingPage): self
    {
        $this->landingPage = $landingPage;
        return $this;
    }

    public function getLoginPage(): ?string
    {
        return $this->loginPage;
    }

    public function setLoginPage(?string $loginPage): self
    {
        $this->loginPage = $loginPage;
        return $this;
    }

    public function getPayload(): ?string
    {
        return $this->payload;
    }

    public function setPayload(?string $payload): self
    {
        $this->payload = $payload;
        return $this;
    }

}
