<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskUserActivity
 */
class RiskUserActivity
{
    public function __construct(
        /** Details of the detected risk. Possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue. For more information about each value, see Risk types and detection. */
        public ?RiskDetail $detail = null,
        /** @var string[] The type of risk event detected. */
        public array $riskEventTypes = []
    ) {}
}
