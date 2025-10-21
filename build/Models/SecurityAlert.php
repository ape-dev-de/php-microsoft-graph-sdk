<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlert
 */
class SecurityAlert
{
    public function __construct(
        /** The adversary or activity group that is associated with this alert. */
        public ?string $actorDisplayName = null,
        /** A collection of other alert properties, including user-defined properties. Any custom details defined in the alert, and any dynamic content in the alert details, are stored here. */
        public ?string $additionalData = null,
        /** The ID of the policy that generated the alert, and populated when there is a specific policy that generated the alert, whether configured by a customer or a built-in policy. */
        public ?string $alertPolicyId = null,
        /** URL for the Microsoft 365 Defender portal alert page. */
        public ?string $alertWebUrl = null,
        /** Owner of the alert, or null if no owner is assigned. */
        public ?string $assignedTo = null,
        /** The attack kill-chain category that the alert belongs to. Aligned with the MITRE ATT&CK framework. */
        public ?string $category = null,
        /** Specifies whether the alert represents a true threat. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue. */
        public ?string $classification = null,
        /** Array of comments created by the Security Operations (SecOps) team during the alert management process. */
        public array $comments = [],
        /** Time when Microsoft 365 Defender created the alert. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** User defined custom fields with string values. */
        public ?string $customDetails = null,
        /** String value describing each alert. */
        public ?string $description = null,
        /** Detection technology or sensor that identified the notable component or activity. Possible values are: unknown, microsoftDefenderForEndpoint, antivirus, smartScreen, customTi, microsoftDefenderForOffice365, automatedInvestigation, microsoftThreatExperts, customDetection, microsoftDefenderForIdentity, cloudAppSecurity, microsoft365Defender, azureAdIdentityProtection, manual, microsoftDataLossPrevention, appGovernancePolicy, appGovernanceDetection, unknownFutureValue, microsoftDefenderForCloud, microsoftDefenderForIoT, microsoftDefenderForServers, microsoftDefenderForStorage, microsoftDefenderForDNS, microsoftDefenderForDatabases, microsoftDefenderForContainers, microsoftDefenderForNetwork, microsoftDefenderForAppService, microsoftDefenderForKeyVault, microsoftDefenderForResourceManager, microsoftDefenderForApiManagement, microsoftSentinel, nrtAlerts, scheduledAlerts, microsoftDefenderThreatIntelligenceAnalytics, builtInMl, microsoftThreatIntelligence, microsoftDefenderForAIServices, securityCopilot. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: microsoftDefenderForCloud, microsoftDefenderForIoT, microsoftDefenderForServers, microsoftDefenderForStorage, microsoftDefenderForDNS, microsoftDefenderForDatabases, microsoftDefenderForContainers, microsoftDefenderForNetwork, microsoftDefenderForAppService, microsoftDefenderForKeyVault, microsoftDefenderForResourceManager, microsoftDefenderForApiManagement, microsoftSentinel, nrtAlerts, scheduledAlerts, microsoftDefenderThreatIntelligenceAnalytics, builtInMl, microsoftThreatIntelligence, microsoftDefenderForAIServices, securityCopilot. */
        public ?string $detectionSource = null,
        /** The ID of the detector that triggered the alert. */
        public ?string $detectorId = null,
        /** Specifies the result of the investigation, whether the alert represents a true attack and if so, the nature of the attack. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedAccount, phishing, maliciousUserActivity, notMalicious, notEnoughDataToValidate, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue. */
        public ?string $determination = null,
        /** Collection of evidence related to the alert. */
        public array $evidence = [],
        /** The earliest activity associated with the alert. */
        public ?\DateTimeInterface $firstActivityDateTime = null,
        /** Unique identifier to represent the incident this alert resource is associated with. */
        public ?string $incidentId = null,
        /** URL for the incident page in the Microsoft 365 Defender portal. */
        public ?string $incidentWebUrl = null,
        /** The oldest activity associated with the alert. */
        public ?\DateTimeInterface $lastActivityDateTime = null,
        /** Time when the alert was last updated at Microsoft 365 Defender. */
        public ?\DateTimeInterface $lastUpdateDateTime = null,
        /** @var string[] The attack techniques, as aligned with the MITRE ATT&CK framework. */
        public array $mitreTechniques = [],
        /** The name of the product which published this alert. */
        public ?string $productName = null,
        /** The ID of the alert as it appears in the security provider product that generated the alert. */
        public ?string $providerAlertId = null,
        /** Recommended response and remediation actions to take in the event this alert was generated. */
        public ?string $recommendedActions = null,
        /** Time when the alert was resolved. */
        public ?\DateTimeInterface $resolvedDateTime = null,
        /**  */
        public ?string $serviceSource = null,
        /**  */
        public ?string $severity = null,
        /**  */
        public ?string $status = null,
        /** @var string[] The system tags associated with the alert. */
        public array $systemTags = [],
        /** The Microsoft Entra tenant the alert was created in. */
        public ?string $tenantId = null,
        /** The threat associated with this alert. */
        public ?string $threatDisplayName = null,
        /** Threat family associated with this alert. */
        public ?string $threatFamilyName = null,
        /** Brief identifying string value describing the alert. */
        public ?string $title = null
    ) {}
}
