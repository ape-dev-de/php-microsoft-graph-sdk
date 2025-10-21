<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignIn
 */
class SignIn
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** App name displayed in the Microsoft Entra admin center.  Supports $filter (eq, startsWith). */
        public ?string $appDisplayName = null,
        /** Unique GUID that represents the app ID in the Microsoft Entra ID.  Supports $filter (eq). */
        public ?string $appId = null,
        /** Provides a list of conditional access policies that the corresponding sign-in activity triggers. Apps need more Conditional Access-related privileges to read the details of this property. For more information, see Permissions for viewing applied conditional access (CA) policies in sign-ins. */
        public array $appliedConditionalAccessPolicies = [],
        /** Identifies the client used for the sign-in activity. Modern authentication clients include Browser, modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients.  Supports $filter (eq). */
        public ?string $clientAppUsed = null,
        /** Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue.  Supports $filter (eq). */
        public ?string $conditionalAccessStatus = null,
        /** The request ID sent from the client when the sign-in is initiated. Used to troubleshoot sign-in activity.  Supports $filter (eq). */
        public ?string $correlationId = null,
        /** Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z.  Supports $orderby, $filter (eq, le, and ge). */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Device information from where the sign-in occurred; includes device ID, operating system, and browser.  Supports $filter (eq, startsWith) on browser and operatingSytem properties. */
        public ?string $deviceDetail = null,
        /** IP address of the client used to sign in.  Supports $filter (eq, startsWith). */
        public ?string $ipAddress = null,
        /** Indicates whether a sign-in is interactive. */
        public ?bool $isInteractive = null,
        /** Provides the city, state, and country code where the sign-in originated.  Supports $filter (eq, startsWith) on city, state, and countryOrRegion properties. */
        public ?string $location = null,
        /** Name of the resource the user signed into.  Supports $filter (eq). */
        public ?string $resourceDisplayName = null,
        /** ID of the resource that the user signed into.  Supports $filter (eq). */
        public ?string $resourceId = null,
        /** The reason behind a specific state of a risky user, sign-in, or a risk event. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe. Use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.The value none means that Microsoft Entra risk detection did not flag the user or the sign-in as a risky event so far.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden. */
        public ?string $riskDetail = null,
        /**  */
        public array $riskEventTypes = [],
        /** @var string[] The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence, generic, or unknownFutureValue.  Supports $filter (eq, startsWith). */
        public array $riskEventTypes_v2 = [],
        /** Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq).  Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden. */
        public ?string $riskLevelAggregated = null,
        /** Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden. */
        public ?string $riskLevelDuringSignIn = null,
        /** Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.  Supports $filter (eq). */
        public ?string $riskState = null,
        /** Sign-in status. Includes the error code and description of the error (if a sign-in failure occurs).  Supports $filter (eq) on errorCode property. */
        public ?string $status = null,
        /** Display name of the user that initiated the sign-in.  Supports $filter (eq, startsWith). */
        public ?string $userDisplayName = null,
        /** ID of the user that initiated the sign-in.  Supports $filter (eq). */
        public ?string $userId = null,
        /** User principal name of the user that initiated the sign-in. This value is always in lowercase. For guest users whose values in the user object typically contain #EXT# before the domain part, this property stores the value in both lowercase and the 'true' format. For example, while the user object stores AdeleVance_fabrikam.com#EXT#@contoso.com, the sign-in logs store adelevance@fabrikam.com. Supports $filter (eq, startsWith). */
        public ?string $userPrincipalName = null
    ) {}
}
