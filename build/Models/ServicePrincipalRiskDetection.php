<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalRiskDetection
 */
class ServicePrincipalRiskDetection
{
    /**
     * Indicates the activity type the detected risk is linked to.  The possible values are: signin, servicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: servicePrincipal.
     */
    private ?string $activity;

    /**
     * Date and time when the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $activityDateTime;

    /**
     * Additional information associated with the risk detection. This string value is represented as a JSON object with the quotations escaped.
     */
    private ?string $additionalInfo;

    /**
     * The unique identifier for the associated application.
     */
    private ?string $appId;

    /**
     * Correlation ID of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity.
     */
    private ?string $correlationId;

    /**
     * Date and time when the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $detectedDateTime;

    /**
     * Timing of the detected risk , whether real-time or offline. The possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
     */
    private ?string $detectionTimingType;

    /**
     * Provides the IP address of the client from where the risk occurred.
     */
    private ?string $ipAddress;

    /**
     * The unique identifier for the key credential associated with the risk detection.
     * @var string[]
     */
    private array $keyIds = [];

    /**
     * Date and time when the risk detection was last updated.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * Location from where the sign-in was initiated.
     */
    private ?string $location;

    /**
     * Request identifier of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity. Supports $filter (eq).
     */
    private ?string $requestId;

    /**
     * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: none, hidden, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
     */
    private ?string $riskDetail;

    /**
     * The type of risk event detected. The possible values are: investigationsThreatIntelligence, generic, adminConfirmedServicePrincipalCompromised, suspiciousSignins, leakedCredentials, anomalousServicePrincipalActivity, maliciousApplication, suspiciousApplication.
     */
    private ?string $riskEventType;

    /**
     * Level of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: low, medium, high, hidden, none.
     */
    private ?string $riskLevel;

    /**
     * The state of a detected risky service principal or sign-in activity. The possible values are: none, dismissed, atRisk, confirmedCompromised.
     */
    private ?string $riskState;

    /**
     * The display name for the service principal.
     */
    private ?string $servicePrincipalDisplayName;

    /**
     * The unique identifier for the service principal. Supports $filter (eq).
     */
    private ?string $servicePrincipalId;

    /**
     * Source of the risk detection. For example, identityProtection.
     */
    private ?string $source;

    /**
     * Indicates the type of token issuer for the detected sign-in risk. The possible values are: AzureAD.
     */
    private ?string $tokenIssuerType;


    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

    public function getActivityDateTime(): ?\DateTimeInterface
    {
        return $this->activityDateTime;
    }

    public function setActivityDateTime(?\DateTimeInterface $activityDateTime): self
    {
        $this->activityDateTime = $activityDateTime;
        return $this;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    public function setAdditionalInfo(?string $additionalInfo): self
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(?string $correlationId): self
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function getDetectedDateTime(): ?\DateTimeInterface
    {
        return $this->detectedDateTime;
    }

    public function setDetectedDateTime(?\DateTimeInterface $detectedDateTime): self
    {
        $this->detectedDateTime = $detectedDateTime;
        return $this;
    }

    public function getDetectionTimingType(): ?string
    {
        return $this->detectionTimingType;
    }

    public function setDetectionTimingType(?string $detectionTimingType): self
    {
        $this->detectionTimingType = $detectionTimingType;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getKeyIds(): array
    {
        return $this->keyIds;
    }

    /**
     * @param string[] $keyIds
     */
    public function setKeyIds(array $keyIds): self
    {
        $this->keyIds = $keyIds;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function getRiskDetail(): ?string
    {
        return $this->riskDetail;
    }

    public function setRiskDetail(?string $riskDetail): self
    {
        $this->riskDetail = $riskDetail;
        return $this;
    }

    public function getRiskEventType(): ?string
    {
        return $this->riskEventType;
    }

    public function setRiskEventType(?string $riskEventType): self
    {
        $this->riskEventType = $riskEventType;
        return $this;
    }

    public function getRiskLevel(): ?string
    {
        return $this->riskLevel;
    }

    public function setRiskLevel(?string $riskLevel): self
    {
        $this->riskLevel = $riskLevel;
        return $this;
    }

    public function getRiskState(): ?string
    {
        return $this->riskState;
    }

    public function setRiskState(?string $riskState): self
    {
        $this->riskState = $riskState;
        return $this;
    }

    public function getServicePrincipalDisplayName(): ?string
    {
        return $this->servicePrincipalDisplayName;
    }

    public function setServicePrincipalDisplayName(?string $servicePrincipalDisplayName): self
    {
        $this->servicePrincipalDisplayName = $servicePrincipalDisplayName;
        return $this;
    }

    public function getServicePrincipalId(): ?string
    {
        return $this->servicePrincipalId;
    }

    public function setServicePrincipalId(?string $servicePrincipalId): self
    {
        $this->servicePrincipalId = $servicePrincipalId;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getTokenIssuerType(): ?string
    {
        return $this->tokenIssuerType;
    }

    public function setTokenIssuerType(?string $tokenIssuerType): self
    {
        $this->tokenIssuerType = $tokenIssuerType;
        return $this;
    }

}
