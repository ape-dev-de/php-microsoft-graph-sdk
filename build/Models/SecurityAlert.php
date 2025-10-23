<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlert
 */
class SecurityAlert
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The adversary or activity group that is associated with this alert. */
    public ?string $actorDisplayName = null;

    /** 
     * A collection of other alert properties, including user-defined properties. Any custom details defined in the alert, and any dynamic content in the alert details, are stored here.
     * @var SecurityDictionary|\stdClass|null
     */
    public mixed $additionalData = null;

    /** The ID of the policy that generated the alert, and populated when there is a specific policy that generated the alert, whether configured by a customer or a built-in policy. */
    public ?string $alertPolicyId = null;

    /** URL for the Microsoft 365 Defender portal alert page. */
    public ?string $alertWebUrl = null;

    /** Owner of the alert, or null if no owner is assigned. */
    public ?string $assignedTo = null;

    /** The attack kill-chain category that the alert belongs to. Aligned with the MITRE ATT&CK framework. */
    public ?string $category = null;

    /** 
     * Specifies whether the alert represents a true threat. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     * @var SecurityAlertClassification|\stdClass|null
     */
    public mixed $classification = null;

    /** 
     * Array of comments created by the Security Operations (SecOps) team during the alert management process.
     * @var SecurityAlertComment[]
     */
    public array $comments = [];

    /** Time when Microsoft 365 Defender created the alert. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * User defined custom fields with string values.
     * @var SecurityDictionary|\stdClass|null
     */
    public mixed $customDetails = null;

    /** String value describing each alert. */
    public ?string $description = null;

    /** 
     * Detection technology or sensor that identified the notable component or activity. Possible values are: unknown, microsoftDefenderForEndpoint, antivirus, smartScreen, customTi, microsoftDefenderForOffice365, automatedInvestigation, microsoftThreatExperts, customDetection, microsoftDefenderForIdentity, cloudAppSecurity, microsoft365Defender, azureAdIdentityProtection, manual, microsoftDataLossPrevention, appGovernancePolicy, appGovernanceDetection, unknownFutureValue, microsoftDefenderForCloud, microsoftDefenderForIoT, microsoftDefenderForServers, microsoftDefenderForStorage, microsoftDefenderForDNS, microsoftDefenderForDatabases, microsoftDefenderForContainers, microsoftDefenderForNetwork, microsoftDefenderForAppService, microsoftDefenderForKeyVault, microsoftDefenderForResourceManager, microsoftDefenderForApiManagement, microsoftSentinel, nrtAlerts, scheduledAlerts, microsoftDefenderThreatIntelligenceAnalytics, builtInMl, microsoftThreatIntelligence, microsoftDefenderForAIServices, securityCopilot. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: microsoftDefenderForCloud, microsoftDefenderForIoT, microsoftDefenderForServers, microsoftDefenderForStorage, microsoftDefenderForDNS, microsoftDefenderForDatabases, microsoftDefenderForContainers, microsoftDefenderForNetwork, microsoftDefenderForAppService, microsoftDefenderForKeyVault, microsoftDefenderForResourceManager, microsoftDefenderForApiManagement, microsoftSentinel, nrtAlerts, scheduledAlerts, microsoftDefenderThreatIntelligenceAnalytics, builtInMl, microsoftThreatIntelligence, microsoftDefenderForAIServices, securityCopilot.
     * @var SecurityDetectionSource|\stdClass|null
     */
    public mixed $detectionSource = null;

    /** The ID of the detector that triggered the alert. */
    public ?string $detectorId = null;

    /** 
     * Specifies the result of the investigation, whether the alert represents a true attack and if so, the nature of the attack. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedAccount, phishing, maliciousUserActivity, notMalicious, notEnoughDataToValidate, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     * @var SecurityAlertDetermination|\stdClass|null
     */
    public mixed $determination = null;

    /** 
     * Collection of evidence related to the alert.
     * @var SecurityAlertEvidence[]
     */
    public array $evidence = [];

    /** The earliest activity associated with the alert. */
    public ?\DateTimeInterface $firstActivityDateTime = null;

    /** Unique identifier to represent the incident this alert resource is associated with. */
    public ?string $incidentId = null;

    /** URL for the incident page in the Microsoft 365 Defender portal. */
    public ?string $incidentWebUrl = null;

    /** The oldest activity associated with the alert. */
    public ?\DateTimeInterface $lastActivityDateTime = null;

    /** Time when the alert was last updated at Microsoft 365 Defender. */
    public ?\DateTimeInterface $lastUpdateDateTime = null;

    /** 
     * The attack techniques, as aligned with the MITRE ATT&CK framework.
     * @var string[]
     */
    public array $mitreTechniques = [];

    /** The name of the product which published this alert. */
    public ?string $productName = null;

    /** The ID of the alert as it appears in the security provider product that generated the alert. */
    public ?string $providerAlertId = null;

    /** Recommended response and remediation actions to take in the event this alert was generated. */
    public ?string $recommendedActions = null;

    /** Time when the alert was resolved. */
    public ?\DateTimeInterface $resolvedDateTime = null;

    /**  */
    public ?SecurityServiceSource $serviceSource = null;

    /**  */
    public ?SecurityAlertSeverity $severity = null;

    /**  */
    public ?SecurityAlertStatus $status = null;

    /** 
     * The system tags associated with the alert.
     * @var string[]
     */
    public array $systemTags = [];

    /** The Microsoft Entra tenant the alert was created in. */
    public ?string $tenantId = null;

    /** The threat associated with this alert. */
    public ?string $threatDisplayName = null;

    /** Threat family associated with this alert. */
    public ?string $threatFamilyName = null;

    /** Brief identifying string value describing the alert. */
    public ?string $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['actorDisplayName'])) {
            $this->actorDisplayName = $data['actorDisplayName'];
        }
        if (isset($data['additionalData'])) {
            $this->additionalData = $data['additionalData'];
        }
        if (isset($data['alertPolicyId'])) {
            $this->alertPolicyId = $data['alertPolicyId'];
        }
        if (isset($data['alertWebUrl'])) {
            $this->alertWebUrl = $data['alertWebUrl'];
        }
        if (isset($data['assignedTo'])) {
            $this->assignedTo = $data['assignedTo'];
        }
        if (isset($data['category'])) {
            $this->category = $data['category'];
        }
        if (isset($data['classification'])) {
            $this->classification = $data['classification'];
        }
        if (isset($data['comments'])) {
            $this->comments = $data['comments'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customDetails'])) {
            $this->customDetails = $data['customDetails'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['detectionSource'])) {
            $this->detectionSource = $data['detectionSource'];
        }
        if (isset($data['detectorId'])) {
            $this->detectorId = $data['detectorId'];
        }
        if (isset($data['determination'])) {
            $this->determination = $data['determination'];
        }
        if (isset($data['evidence'])) {
            $this->evidence = $data['evidence'];
        }
        if (isset($data['firstActivityDateTime'])) {
            $this->firstActivityDateTime = is_string($data['firstActivityDateTime']) ? new \DateTimeImmutable($data['firstActivityDateTime']) : $data['firstActivityDateTime'];
        }
        if (isset($data['incidentId'])) {
            $this->incidentId = $data['incidentId'];
        }
        if (isset($data['incidentWebUrl'])) {
            $this->incidentWebUrl = $data['incidentWebUrl'];
        }
        if (isset($data['lastActivityDateTime'])) {
            $this->lastActivityDateTime = is_string($data['lastActivityDateTime']) ? new \DateTimeImmutable($data['lastActivityDateTime']) : $data['lastActivityDateTime'];
        }
        if (isset($data['lastUpdateDateTime'])) {
            $this->lastUpdateDateTime = is_string($data['lastUpdateDateTime']) ? new \DateTimeImmutable($data['lastUpdateDateTime']) : $data['lastUpdateDateTime'];
        }
        if (isset($data['mitreTechniques'])) {
            $this->mitreTechniques = $data['mitreTechniques'];
        }
        if (isset($data['productName'])) {
            $this->productName = $data['productName'];
        }
        if (isset($data['providerAlertId'])) {
            $this->providerAlertId = $data['providerAlertId'];
        }
        if (isset($data['recommendedActions'])) {
            $this->recommendedActions = $data['recommendedActions'];
        }
        if (isset($data['resolvedDateTime'])) {
            $this->resolvedDateTime = is_string($data['resolvedDateTime']) ? new \DateTimeImmutable($data['resolvedDateTime']) : $data['resolvedDateTime'];
        }
        if (isset($data['serviceSource'])) {
            $this->serviceSource = $data['serviceSource'];
        }
        if (isset($data['severity'])) {
            $this->severity = $data['severity'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['systemTags'])) {
            $this->systemTags = $data['systemTags'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['threatDisplayName'])) {
            $this->threatDisplayName = $data['threatDisplayName'];
        }
        if (isset($data['threatFamilyName'])) {
            $this->threatFamilyName = $data['threatFamilyName'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
    }
}
