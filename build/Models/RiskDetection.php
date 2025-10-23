<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskDetection
 */
class RiskDetection
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Indicates the activity type the detected risk is linked to. Possible values are: signin, user, unknownFutureValue.
     * @var ActivityType|\stdClass|null
     */
    public mixed $activity = null;

    /** Date and time that the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $activityDateTime = null;

    /** Additional information associated with the risk detection in JSON format. For example, '[{/'Key/':/'userAgent/',/'Value/':/'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36/'}]'. Possible keys in the additionalInfo JSON string are: userAgent, alertUrl, relatedEventTimeInUtc, relatedUserAgent, deviceInformation, relatedLocation, requestId, correlationId, lastActivityTimeInUtc, malwareName, clientLocation, clientIp, riskReasons. For more information about riskReasons and possible values, see riskReasons values. */
    public ?string $additionalInfo = null;

    /** Correlation ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in. */
    public ?string $correlationId = null;

    /** Date and time that the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $detectedDateTime = null;

    /** 
     * Timing of the detected risk (real-time/offline). Possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
     * @var RiskDetectionTimingType|\stdClass|null
     */
    public mixed $detectionTimingType = null;

    /** Provides the IP address of the client from where the risk occurred. */
    public ?string $ipAddress = null;

    /** Date and time that the risk detection was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** 
     * Location of the sign-in.
     * @var SignInLocation|\stdClass|null
     */
    public mixed $location = null;

    /** Request ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in. */
    public ?string $requestId = null;

    /** 
     * Details of the detected risk. The possible values are: none, adminGeneratedTemporaryPassword, userChangedPasswordOnPremises, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, m365DAdminDismissedDetection. Use the Prefer: include - unknown -enum-members request header to get the following value(s) in this evolvable enum: m365DAdminDismissedDetection.
     * @var RiskDetail|\stdClass|null
     */
    public mixed $riskDetail = null;

    /** The type of risk event detected. The possible values are adminConfirmedUserCompromised, anomalousToken, anomalousUserActivity, anonymizedIPAddress, generic, impossibleTravel, investigationsThreatIntelligence, suspiciousSendingPatterns, leakedCredentials, maliciousIPAddress,malwareInfectedIPAddress, mcasSuspiciousInboxManipulationRules, newCountry, passwordSpray,riskyIPAddress, suspiciousAPITraffic, suspiciousBrowser,suspiciousInboxForwarding, suspiciousIPAddress, tokenIssuerAnomaly, unfamiliarFeatures, unlikelyTravel. If the risk detection is a premium detection, will show generic. For more information about each value, see Risk types and detection. */
    public ?string $riskEventType = null;

    /** 
     * Level of the detected risk. Possible values are: low, medium, high, hidden, none, unknownFutureValue.
     * @var RiskLevel|\stdClass|null
     */
    public mixed $riskLevel = null;

    /** 
     * The state of a detected risky user or sign-in. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     * @var RiskState|\stdClass|null
     */
    public mixed $riskState = null;

    /** Source of the risk detection. For example, activeDirectory. */
    public ?string $source = null;

    /** 
     * Indicates the type of token issuer for the detected sign-in risk. Possible values are: AzureAD, ADFederationServices, UnknownFutureValue.
     * @var TokenIssuerType|\stdClass|null
     */
    public mixed $tokenIssuerType = null;

    /** The user principal name (UPN) of the user. */
    public ?string $userDisplayName = null;

    /** Unique ID of the user. */
    public ?string $userId = null;

    /** The user principal name (UPN) of the user. */
    public ?string $userPrincipalName = null;


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
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['tokenIssuerType'])) {
            $this->tokenIssuerType = $data['tokenIssuerType'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
