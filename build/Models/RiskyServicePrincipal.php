<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyServicePrincipal
 */
class RiskyServicePrincipal
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The globally unique identifier for the associated application (its appId property), if any. */
    public ?string $appId = null;

    /** The display name for the service principal. */
    public ?string $displayName = null;

    /** true if the service principal account is enabled; otherwise, false. */
    public ?bool $isEnabled = null;

    /** Indicates whether Microsoft Entra ID is currently processing the service principal's risky state. */
    public ?bool $isProcessing = null;

    /** 
     * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: none, hidden,  unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
     * @var RiskDetail|\stdClass|null
     */
    public RiskDetail|\stdClass|null $riskDetail = null;

    /** The date and time that the risk state was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. Supports $filter (eq). */
    public ?\DateTimeInterface $riskLastUpdatedDateTime = null;

    /** 
     * Level of the detected risky workload identity. The possible values are: low, medium, high, hidden, none, unknownFutureValue. Supports $filter (eq).
     * @var RiskLevel|\stdClass|null
     */
    public RiskLevel|\stdClass|null $riskLevel = null;

    /** 
     * State of the service principal's risk. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     * @var RiskState|\stdClass|null
     */
    public RiskState|\stdClass|null $riskState = null;

    /** Identifies whether the service principal represents an Application, a ManagedIdentity, or a legacy application (socialIdp). This is set by Microsoft Entra ID internally and is inherited from servicePrincipal. */
    public ?string $servicePrincipalType = null;

    /** 
     * Represents the risk history of Microsoft Entra service principals.
     * @var RiskyServicePrincipalHistoryItem[]
     */
    public array $history = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['isProcessing'])) {
            $this->isProcessing = is_bool($data['isProcessing']) ? $data['isProcessing'] : (bool)$data['isProcessing'];
        }
        if (isset($data['riskDetail'])) {
            $this->riskDetail = is_array($data['riskDetail']) ? new RiskDetail($data['riskDetail']) : $data['riskDetail'];
        }
        if (isset($data['riskLastUpdatedDateTime'])) {
            $this->riskLastUpdatedDateTime = is_string($data['riskLastUpdatedDateTime']) ? new \DateTimeImmutable($data['riskLastUpdatedDateTime']) : $data['riskLastUpdatedDateTime'];
        }
        if (isset($data['riskLevel'])) {
            $this->riskLevel = is_array($data['riskLevel']) ? new RiskLevel($data['riskLevel']) : $data['riskLevel'];
        }
        if (isset($data['riskState'])) {
            $this->riskState = is_array($data['riskState']) ? new RiskState($data['riskState']) : $data['riskState'];
        }
        if (isset($data['servicePrincipalType'])) {
            $this->servicePrincipalType = $data['servicePrincipalType'];
        }
        if (isset($data['history'])) {
            $this->history = $data['history'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
