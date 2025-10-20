<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlert
 */
class SecurityAlert
{
    /**
     * The adversary or activity group that is associated with this alert.
     */
    private ?string $actorDisplayName;

    /**
     * A collection of other alert properties, including user-defined properties. Any custom details defined in the alert, and any dynamic content in the alert details, are stored here.
     */
    private ?string $additionalData;

    /**
     * The ID of the policy that generated the alert, and populated when there is a specific policy that generated the alert, whether configured by a customer or a built-in policy.
     */
    private ?string $alertPolicyId;

    /**
     * URL for the Microsoft 365 Defender portal alert page.
     */
    private ?string $alertWebUrl;

    /**
     * Owner of the alert, or null if no owner is assigned.
     */
    private ?string $assignedTo;

    /**
     * The attack kill-chain category that the alert belongs to. Aligned with the MITRE ATT&CK framework.
     */
    private ?string $category;

    /**
     * Specifies whether the alert represents a true threat. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     */
    private ?string $classification;

    /**
     * Array of comments created by the Security Operations (SecOps) team during the alert management process.
     */
    private array $comments = [];

    /**
     * Time when Microsoft 365 Defender created the alert.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * User defined custom fields with string values.
     */
    private ?string $customDetails;

    /**
     * String value describing each alert.
     */
    private ?string $description;

    /**
     * Detection technology or sensor that identified the notable component or activity. Possible values are: unknown, microsoftDefenderForEndpoint, antivirus, smartScreen, customTi, microsoftDefenderForOffice365, automatedInvestigation, microsoftThreatExperts, customDetection, microsoftDefenderForIdentity, cloudAppSecurity, microsoft365Defender, azureAdIdentityProtection, manual, microsoftDataLossPrevention, appGovernancePolicy, appGovernanceDetection, unknownFutureValue, microsoftDefenderForCloud, microsoftDefenderForIoT, microsoftDefenderForServers, microsoftDefenderForStorage, microsoftDefenderForDNS, microsoftDefenderForDatabases, microsoftDefenderForContainers, microsoftDefenderForNetwork, microsoftDefenderForAppService, microsoftDefenderForKeyVault, microsoftDefenderForResourceManager, microsoftDefenderForApiManagement, microsoftSentinel, nrtAlerts, scheduledAlerts, microsoftDefenderThreatIntelligenceAnalytics, builtInMl, microsoftThreatIntelligence, microsoftDefenderForAIServices, securityCopilot. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: microsoftDefenderForCloud, microsoftDefenderForIoT, microsoftDefenderForServers, microsoftDefenderForStorage, microsoftDefenderForDNS, microsoftDefenderForDatabases, microsoftDefenderForContainers, microsoftDefenderForNetwork, microsoftDefenderForAppService, microsoftDefenderForKeyVault, microsoftDefenderForResourceManager, microsoftDefenderForApiManagement, microsoftSentinel, nrtAlerts, scheduledAlerts, microsoftDefenderThreatIntelligenceAnalytics, builtInMl, microsoftThreatIntelligence, microsoftDefenderForAIServices, securityCopilot.
     */
    private ?string $detectionSource;

    /**
     * The ID of the detector that triggered the alert.
     */
    private ?string $detectorId;

    /**
     * Specifies the result of the investigation, whether the alert represents a true attack and if so, the nature of the attack. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedAccount, phishing, maliciousUserActivity, notMalicious, notEnoughDataToValidate, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     */
    private ?string $determination;

    /**
     * Collection of evidence related to the alert.
     */
    private array $evidence = [];

    /**
     * The earliest activity associated with the alert.
     */
    private ?\DateTimeInterface $firstActivityDateTime;

    /**
     * Unique identifier to represent the incident this alert resource is associated with.
     */
    private ?string $incidentId;

    /**
     * URL for the incident page in the Microsoft 365 Defender portal.
     */
    private ?string $incidentWebUrl;

    /**
     * The oldest activity associated with the alert.
     */
    private ?\DateTimeInterface $lastActivityDateTime;

    /**
     * Time when the alert was last updated at Microsoft 365 Defender.
     */
    private ?\DateTimeInterface $lastUpdateDateTime;

    /**
     * The attack techniques, as aligned with the MITRE ATT&CK framework.
     */
    private ?string $mitreTechniques;

    /**
     * The name of the product which published this alert.
     */
    private ?string $productName;

    /**
     * The ID of the alert as it appears in the security provider product that generated the alert.
     */
    private ?string $providerAlertId;

    /**
     * Recommended response and remediation actions to take in the event this alert was generated.
     */
    private ?string $recommendedActions;

    /**
     * Time when the alert was resolved.
     */
    private ?\DateTimeInterface $resolvedDateTime;

    /**
     */
    private ?string $serviceSource;

    /**
     */
    private ?string $severity;

    /**
     */
    private ?string $status;

    /**
     * The system tags associated with the alert.
     */
    private ?string $systemTags;

    /**
     * The Microsoft Entra tenant the alert was created in.
     */
    private ?string $tenantId;

    /**
     * The threat associated with this alert.
     */
    private ?string $threatDisplayName;

    /**
     * Threat family associated with this alert.
     */
    private ?string $threatFamilyName;

    /**
     * Brief identifying string value describing the alert.
     */
    private ?string $title;

    public function getActorDisplayName(): ?string
    {
        return $this->actorDisplayName;
    }

    public function setActorDisplayName(?string $actorDisplayName): self
    {
        $this->actorDisplayName = $actorDisplayName;
        return $this;
    }

    public function getAdditionalData(): ?string
    {
        return $this->additionalData;
    }

    public function setAdditionalData(?string $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }

    public function getAlertPolicyId(): ?string
    {
        return $this->alertPolicyId;
    }

    public function setAlertPolicyId(?string $alertPolicyId): self
    {
        $this->alertPolicyId = $alertPolicyId;
        return $this;
    }

    public function getAlertWebUrl(): ?string
    {
        return $this->alertWebUrl;
    }

    public function setAlertWebUrl(?string $alertWebUrl): self
    {
        $this->alertWebUrl = $alertWebUrl;
        return $this;
    }

    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?string $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;
        return $this;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(array $comments): self
    {
        $this->comments = $comments;
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

    public function getCustomDetails(): ?string
    {
        return $this->customDetails;
    }

    public function setCustomDetails(?string $customDetails): self
    {
        $this->customDetails = $customDetails;
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

    public function getDetectionSource(): ?string
    {
        return $this->detectionSource;
    }

    public function setDetectionSource(?string $detectionSource): self
    {
        $this->detectionSource = $detectionSource;
        return $this;
    }

    public function getDetectorId(): ?string
    {
        return $this->detectorId;
    }

    public function setDetectorId(?string $detectorId): self
    {
        $this->detectorId = $detectorId;
        return $this;
    }

    public function getDetermination(): ?string
    {
        return $this->determination;
    }

    public function setDetermination(?string $determination): self
    {
        $this->determination = $determination;
        return $this;
    }

    public function getEvidence(): array
    {
        return $this->evidence;
    }

    public function setEvidence(array $evidence): self
    {
        $this->evidence = $evidence;
        return $this;
    }

    public function getFirstActivityDateTime(): ?\DateTimeInterface
    {
        return $this->firstActivityDateTime;
    }

    public function setFirstActivityDateTime(?\DateTimeInterface $firstActivityDateTime): self
    {
        $this->firstActivityDateTime = $firstActivityDateTime;
        return $this;
    }

    public function getIncidentId(): ?string
    {
        return $this->incidentId;
    }

    public function setIncidentId(?string $incidentId): self
    {
        $this->incidentId = $incidentId;
        return $this;
    }

    public function getIncidentWebUrl(): ?string
    {
        return $this->incidentWebUrl;
    }

    public function setIncidentWebUrl(?string $incidentWebUrl): self
    {
        $this->incidentWebUrl = $incidentWebUrl;
        return $this;
    }

    public function getLastActivityDateTime(): ?\DateTimeInterface
    {
        return $this->lastActivityDateTime;
    }

    public function setLastActivityDateTime(?\DateTimeInterface $lastActivityDateTime): self
    {
        $this->lastActivityDateTime = $lastActivityDateTime;
        return $this;
    }

    public function getLastUpdateDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdateDateTime;
    }

    public function setLastUpdateDateTime(?\DateTimeInterface $lastUpdateDateTime): self
    {
        $this->lastUpdateDateTime = $lastUpdateDateTime;
        return $this;
    }

    public function getMitreTechniques(): ?string
    {
        return $this->mitreTechniques;
    }

    public function setMitreTechniques(?string $mitreTechniques): self
    {
        $this->mitreTechniques = $mitreTechniques;
        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    public function getProviderAlertId(): ?string
    {
        return $this->providerAlertId;
    }

    public function setProviderAlertId(?string $providerAlertId): self
    {
        $this->providerAlertId = $providerAlertId;
        return $this;
    }

    public function getRecommendedActions(): ?string
    {
        return $this->recommendedActions;
    }

    public function setRecommendedActions(?string $recommendedActions): self
    {
        $this->recommendedActions = $recommendedActions;
        return $this;
    }

    public function getResolvedDateTime(): ?\DateTimeInterface
    {
        return $this->resolvedDateTime;
    }

    public function setResolvedDateTime(?\DateTimeInterface $resolvedDateTime): self
    {
        $this->resolvedDateTime = $resolvedDateTime;
        return $this;
    }

    public function getServiceSource(): ?string
    {
        return $this->serviceSource;
    }

    public function setServiceSource(?string $serviceSource): self
    {
        $this->serviceSource = $serviceSource;
        return $this;
    }

    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    public function setSeverity(?string $severity): self
    {
        $this->severity = $severity;
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

    public function getSystemTags(): ?string
    {
        return $this->systemTags;
    }

    public function setSystemTags(?string $systemTags): self
    {
        $this->systemTags = $systemTags;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getThreatDisplayName(): ?string
    {
        return $this->threatDisplayName;
    }

    public function setThreatDisplayName(?string $threatDisplayName): self
    {
        $this->threatDisplayName = $threatDisplayName;
        return $this;
    }

    public function getThreatFamilyName(): ?string
    {
        return $this->threatFamilyName;
    }

    public function setThreatFamilyName(?string $threatFamilyName): self
    {
        $this->threatFamilyName = $threatFamilyName;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
