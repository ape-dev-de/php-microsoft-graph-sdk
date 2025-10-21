<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyUser
 */
class RiskyUser
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether the user is deleted. Possible values are: true, false. */
        public ?bool $isDeleted = null,
        /** Indicates whether the backend is processing a user's risky state. */
        public ?bool $isProcessing = null,
        /** The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe. Use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe. */
        public ?string $riskDetail = null,
        /** The date and time that the risky user was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $riskLastUpdatedDateTime = null,
        /** Level of the detected risky user. Possible values are: low, medium, high, hidden, none, unknownFutureValue. */
        public ?string $riskLevel = null,
        /** State of the user's risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. */
        public ?string $riskState = null,
        /** Risky user display name. */
        public ?string $userDisplayName = null,
        /** Risky user principal name. */
        public ?string $userPrincipalName = null,
        /** The activity related to user risk level change */
        public array $history = []
    ) {}
}
