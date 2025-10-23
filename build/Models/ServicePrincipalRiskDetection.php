<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalRiskDetection
 */
class ServicePrincipalRiskDetection
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Indicates the activity type the detected risk is linked to.  The possible values are: signin, servicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: servicePrincipal.
     * @var ActivityType|\stdClass|null
     */
    public mixed $activity = null;

    /** Date and time when the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $activityDateTime = null;

    /** Additional information associated with the risk detection. This string value is represented as a JSON object with the quotations escaped. */
    public ?string $additionalInfo = null;

    /** The unique identifier for the associated application. */
    public ?string $appId = null;

    /** Correlation ID of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity. */
    public ?string $correlationId = null;

    /** Date and time when the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $detectedDateTime = null;

    /** 
     * Timing of the detected risk , whether real-time or offline. The possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
     * @var RiskDetectionTimingType|\stdClass|null
     */
    public mixed $detectionTimingType = null;

    /** Provides the IP address of the client from where the risk occurred. */
    public ?string $ipAddress = null;

    /** 
     * The unique identifier for the key credential associated with the risk detection.
     * @var string[]
     */
    public array $keyIds = [];

    /** Date and time when the risk detection was last updated. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** 
     * Location from where the sign-in was initiated.
     * @var SignInLocation|\stdClass|null
     */
    public mixed $location = null;

    /** Request identifier of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity. Supports $filter (eq). */
    public ?string $requestId = null;

    /** 
     * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: none, hidden, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
     * @var RiskDetail|\stdClass|null
     */
    public mixed $riskDetail = null;

    /** The type of risk event detected. The possible values are: investigationsThreatIntelligence, generic, adminConfirmedServicePrincipalCompromised, suspiciousSignins, leakedCredentials, anomalousServicePrincipalActivity, maliciousApplication, suspiciousApplication. */
    public ?string $riskEventType = null;

    /** 
     * Level of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: low, medium, high, hidden, none.
     * @var RiskLevel|\stdClass|null
     */
    public mixed $riskLevel = null;

    /** 
     * The state of a detected risky service principal or sign-in activity. The possible values are: none, dismissed, atRisk, confirmedCompromised.
     * @var RiskState|\stdClass|null
     */
    public mixed $riskState = null;

    /** The display name for the service principal. */
    public ?string $servicePrincipalDisplayName = null;

    /** The unique identifier for the service principal. Supports $filter (eq). */
    public ?string $servicePrincipalId = null;

    /** Source of the risk detection. For example, identityProtection. */
    public ?string $source = null;

    /** 
     * Indicates the type of token issuer for the detected sign-in risk. The possible values are: AzureAD.
     * @var TokenIssuerType|\stdClass|null
     */
    public mixed $tokenIssuerType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['activity'])) {
            $this->activity = $data['activity'];
        }
        if (isset($data['activityDateTime'])) {
            $this->activityDateTime = is_string($data['activityDateTime']) ? new \DateTimeImmutable($data['activityDateTime']) : $data['activityDateTime'];
        }
        if (isset($data['additionalInfo'])) {
            $this->additionalInfo = $data['additionalInfo'];
        }
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['detectedDateTime'])) {
            $this->detectedDateTime = is_string($data['detectedDateTime']) ? new \DateTimeImmutable($data['detectedDateTime']) : $data['detectedDateTime'];
        }
        if (isset($data['detectionTimingType'])) {
            $this->detectionTimingType = $data['detectionTimingType'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['keyIds'])) {
            $this->keyIds = $data['keyIds'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }
        if (isset($data['requestId'])) {
            $this->requestId = $data['requestId'];
        }
        if (isset($data['riskDetail'])) {
            $this->riskDetail = $data['riskDetail'];
        }
        if (isset($data['riskEventType'])) {
            $this->riskEventType = $data['riskEventType'];
        }
        if (isset($data['riskLevel'])) {
            $this->riskLevel = $data['riskLevel'];
        }
        if (isset($data['riskState'])) {
            $this->riskState = $data['riskState'];
        }
        if (isset($data['servicePrincipalDisplayName'])) {
            $this->servicePrincipalDisplayName = $data['servicePrincipalDisplayName'];
        }
        if (isset($data['servicePrincipalId'])) {
            $this->servicePrincipalId = $data['servicePrincipalId'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['tokenIssuerType'])) {
            $this->tokenIssuerType = $data['tokenIssuerType'];
        }
    }
}
