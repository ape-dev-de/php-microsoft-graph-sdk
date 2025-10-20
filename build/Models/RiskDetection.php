<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskDetection
 */
class RiskDetection
{
    /**
     * Indicates the activity type the detected risk is linked to. Possible values are: signin, user, unknownFutureValue.
     */
    private ?string $activity;

    /**
     * Date and time that the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $activityDateTime;

    /**
     * Additional information associated with the risk detection in JSON format. For example, ''[{/''Key/'':/''userAgent/'',/''Value/'':/''Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36/''}]''. Possible keys in the additionalInfo JSON string are: userAgent, alertUrl, relatedEventTimeInUtc, relatedUserAgent, deviceInformation, relatedLocation, requestId, correlationId, lastActivityTimeInUtc, malwareName, clientLocation, clientIp, riskReasons. For more information about riskReasons and possible values, see riskReasons values.
     */
    private ?string $additionalInfo;

    /**
     * Correlation ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in.
     */
    private ?string $correlationId;

    /**
     * Date and time that the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $detectedDateTime;

    /**
     * Timing of the detected risk (real-time/offline). Possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
     */
    private ?string $detectionTimingType;

    /**
     * Provides the IP address of the client from where the risk occurred.
     */
    private ?string $ipAddress;

    /**
     * Date and time that the risk detection was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * Location of the sign-in.
     */
    private ?string $location;

    /**
     * Request ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in.
     */
    private ?string $requestId;

    /**
     * Details of the detected risk. The possible values are: none, adminGeneratedTemporaryPassword, userChangedPasswordOnPremises, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, m365DAdminDismissedDetection. Use the Prefer: include - unknown -enum-members request header to get the following value(s) in this evolvable enum: m365DAdminDismissedDetection.
     */
    private ?string $riskDetail;

    /**
     * The type of risk event detected. The possible values are adminConfirmedUserCompromised, anomalousToken, anomalousUserActivity, anonymizedIPAddress, generic, impossibleTravel, investigationsThreatIntelligence, suspiciousSendingPatterns, leakedCredentials, maliciousIPAddress,malwareInfectedIPAddress, mcasSuspiciousInboxManipulationRules, newCountry, passwordSpray,riskyIPAddress, suspiciousAPITraffic, suspiciousBrowser,suspiciousInboxForwarding, suspiciousIPAddress, tokenIssuerAnomaly, unfamiliarFeatures, unlikelyTravel. If the risk detection is a premium detection, will show generic. For more information about each value, see Risk types and detection.
     */
    private ?string $riskEventType;

    /**
     * Level of the detected risk. Possible values are: low, medium, high, hidden, none, unknownFutureValue.
     */
    private ?string $riskLevel;

    /**
     * The state of a detected risky user or sign-in. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     */
    private ?string $riskState;

    /**
     * Source of the risk detection. For example, activeDirectory.
     */
    private ?string $source;

    /**
     * Indicates the type of token issuer for the detected sign-in risk. Possible values are: AzureAD, ADFederationServices, UnknownFutureValue.
     */
    private ?string $tokenIssuerType;

    /**
     * The user principal name (UPN) of the user.
     */
    private ?string $userDisplayName;

    /**
     * Unique ID of the user.
     */
    private ?string $userId;

    /**
     * The user principal name (UPN) of the user.
     */
    private ?string $userPrincipalName;

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

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
