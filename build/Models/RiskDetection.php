<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskDetection
 */
class RiskDetection
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates the activity type the detected risk is linked to. Possible values are: signin, user, unknownFutureValue. */
        public ?string $activity = null,
        /** Date and time that the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $activityDateTime = null,
        /** Additional information associated with the risk detection in JSON format. For example, '[{/'Key/':/'userAgent/',/'Value/':/'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36/'}]'. Possible keys in the additionalInfo JSON string are: userAgent, alertUrl, relatedEventTimeInUtc, relatedUserAgent, deviceInformation, relatedLocation, requestId, correlationId, lastActivityTimeInUtc, malwareName, clientLocation, clientIp, riskReasons. For more information about riskReasons and possible values, see riskReasons values. */
        public ?string $additionalInfo = null,
        /** Correlation ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in. */
        public ?string $correlationId = null,
        /** Date and time that the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $detectedDateTime = null,
        /** Timing of the detected risk (real-time/offline). Possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue. */
        public ?string $detectionTimingType = null,
        /** Provides the IP address of the client from where the risk occurred. */
        public ?string $ipAddress = null,
        /** Date and time that the risk detection was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Location of the sign-in. */
        public ?string $location = null,
        /** Request ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in. */
        public ?string $requestId = null,
        /** Details of the detected risk. The possible values are: none, adminGeneratedTemporaryPassword, userChangedPasswordOnPremises, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, m365DAdminDismissedDetection. Use the Prefer: include - unknown -enum-members request header to get the following value(s) in this evolvable enum: m365DAdminDismissedDetection. */
        public ?string $riskDetail = null,
        /** The type of risk event detected. The possible values are adminConfirmedUserCompromised, anomalousToken, anomalousUserActivity, anonymizedIPAddress, generic, impossibleTravel, investigationsThreatIntelligence, suspiciousSendingPatterns, leakedCredentials, maliciousIPAddress,malwareInfectedIPAddress, mcasSuspiciousInboxManipulationRules, newCountry, passwordSpray,riskyIPAddress, suspiciousAPITraffic, suspiciousBrowser,suspiciousInboxForwarding, suspiciousIPAddress, tokenIssuerAnomaly, unfamiliarFeatures, unlikelyTravel. If the risk detection is a premium detection, will show generic. For more information about each value, see Risk types and detection. */
        public ?string $riskEventType = null,
        /** Level of the detected risk. Possible values are: low, medium, high, hidden, none, unknownFutureValue. */
        public ?string $riskLevel = null,
        /** The state of a detected risky user or sign-in. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. */
        public ?string $riskState = null,
        /** Source of the risk detection. For example, activeDirectory. */
        public ?string $source = null,
        /** Indicates the type of token issuer for the detected sign-in risk. Possible values are: AzureAD, ADFederationServices, UnknownFutureValue. */
        public ?string $tokenIssuerType = null,
        /** The user principal name (UPN) of the user. */
        public ?string $userDisplayName = null,
        /** Unique ID of the user. */
        public ?string $userId = null,
        /** The user principal name (UPN) of the user. */
        public ?string $userPrincipalName = null
    ) {}
}
