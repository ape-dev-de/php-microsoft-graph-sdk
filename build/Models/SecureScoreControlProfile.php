<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScoreControlProfile
 */
class SecureScoreControlProfile
{
    public function __construct(
        /** Control action type (Config, Review, Behavior). */
        public ?string $actionType = null,
        /** URL to where the control can be actioned. */
        public ?string $actionUrl = null,
        /** GUID string for tenant ID. */
        public ?string $azureTenantId = null,
        /** The collection of compliance information associated with secure score control. Not implemented. Currently returns null. */
        public array $complianceInformation = [],
        /** Control action category (Identity, Data, Device, Apps, Infrastructure). */
        public ?string $controlCategory = null,
        /** Flag to indicate where the tenant has marked a control (ignored, thirdParty, reviewed) (supports update). */
        public array $controlStateUpdates = [],
        /** Flag to indicate if a control is depreciated. */
        public ?bool $deprecated = null,
        /** Resource cost of implemmentating control (low, moderate, high). */
        public ?string $implementationCost = null,
        /** Time at which the control profile entity was last modified. The Timestamp type represents date and time */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** max attainable score for the control. */
        public ?string $maxScore = null,
        /** Microsoft's stack ranking of control. */
        public ?float $rank = null,
        /** Description of what the control will help remediate. */
        public ?string $remediation = null,
        /** Description of the impact on users of the remediation. */
        public ?string $remediationImpact = null,
        /** Service that owns the control (Exchange, Sharepoint, Microsoft Entra ID). */
        public ?string $service = null,
        /** @var string[] List of threats the control mitigates (accountBreach, dataDeletion, dataExfiltration, dataSpillage, elevationOfPrivilege, maliciousInsider, passwordCracking, phishingOrWhaling, spoofing). */
        public array $threats = [],
        /** Control tier (Core, Defense in Depth, Advanced.) */
        public ?string $tier = null,
        /** Title of the control. */
        public ?string $title = null,
        /** User impact of implementing control (low, moderate, high). */
        public ?string $userImpact = null,
        /** Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required. */
        public ?string $vendorInformation = null
    ) {}
}
