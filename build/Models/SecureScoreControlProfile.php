<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScoreControlProfile
 */
class SecureScoreControlProfile
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Control action type (Config, Review, Behavior). */
    public ?string $actionType = null;

    /** URL to where the control can be actioned. */
    public ?string $actionUrl = null;

    /** GUID string for tenant ID. */
    public ?string $azureTenantId = null;

    /** 
     * The collection of compliance information associated with secure score control. Not implemented. Currently returns null.
     * @var ComplianceInformation[]
     */
    public array $complianceInformation = [];

    /** Control action category (Identity, Data, Device, Apps, Infrastructure). */
    public ?string $controlCategory = null;

    /** 
     * Flag to indicate where the tenant has marked a control (ignored, thirdParty, reviewed) (supports update).
     * @var SecureScoreControlStateUpdate[]
     */
    public array $controlStateUpdates = [];

    /** Flag to indicate if a control is depreciated. */
    public ?bool $deprecated = null;

    /** Resource cost of implemmentating control (low, moderate, high). */
    public ?string $implementationCost = null;

    /** Time at which the control profile entity was last modified. The Timestamp type represents date and time */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** max attainable score for the control. */
    public ?string $maxScore = null;

    /** Microsoft's stack ranking of control. */
    public ?float $rank = null;

    /** Description of what the control will help remediate. */
    public ?string $remediation = null;

    /** Description of the impact on users of the remediation. */
    public ?string $remediationImpact = null;

    /** Service that owns the control (Exchange, Sharepoint, Microsoft Entra ID). */
    public ?string $service = null;

    /** 
     * List of threats the control mitigates (accountBreach, dataDeletion, dataExfiltration, dataSpillage, elevationOfPrivilege, maliciousInsider, passwordCracking, phishingOrWhaling, spoofing).
     * @var string[]
     */
    public array $threats = [];

    /** Control tier (Core, Defense in Depth, Advanced.) */
    public ?string $tier = null;

    /** Title of the control. */
    public ?string $title = null;

    /** User impact of implementing control (low, moderate, high). */
    public ?string $userImpact = null;

    /** 
     * Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
     * @var SecurityVendorInformation|\stdClass|null
     */
    public mixed $vendorInformation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['actionType'])) {
            $this->actionType = $data['actionType'];
        }
        if (isset($data['actionUrl'])) {
            $this->actionUrl = $data['actionUrl'];
        }
        if (isset($data['azureTenantId'])) {
            $this->azureTenantId = $data['azureTenantId'];
        }
        if (isset($data['complianceInformation'])) {
            $this->complianceInformation = $data['complianceInformation'];
        }
        if (isset($data['controlCategory'])) {
            $this->controlCategory = $data['controlCategory'];
        }
        if (isset($data['controlStateUpdates'])) {
            $this->controlStateUpdates = $data['controlStateUpdates'];
        }
        if (isset($data['deprecated'])) {
            $this->deprecated = $data['deprecated'];
        }
        if (isset($data['implementationCost'])) {
            $this->implementationCost = $data['implementationCost'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['maxScore'])) {
            $this->maxScore = $data['maxScore'];
        }
        if (isset($data['rank'])) {
            $this->rank = $data['rank'];
        }
        if (isset($data['remediation'])) {
            $this->remediation = $data['remediation'];
        }
        if (isset($data['remediationImpact'])) {
            $this->remediationImpact = $data['remediationImpact'];
        }
        if (isset($data['service'])) {
            $this->service = $data['service'];
        }
        if (isset($data['threats'])) {
            $this->threats = $data['threats'];
        }
        if (isset($data['tier'])) {
            $this->tier = $data['tier'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['userImpact'])) {
            $this->userImpact = $data['userImpact'];
        }
        if (isset($data['vendorInformation'])) {
            $this->vendorInformation = $data['vendorInformation'];
        }
    }
}
