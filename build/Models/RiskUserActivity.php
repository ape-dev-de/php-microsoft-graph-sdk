<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskUserActivity
 */
class RiskUserActivity
{
    /** 
     * Details of the detected risk. Possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue. For more information about each value, see Risk types and detection.
     * @var RiskDetail|\stdClass|null
     */
    public mixed $detail = null;

    /** 
     * The type of risk event detected.
     * @var string[]
     */
    public array $riskEventTypes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['detail'])) {
            $this->detail = $data['detail'];
        }
        if (isset($data['riskEventTypes'])) {
            $this->riskEventTypes = $data['riskEventTypes'];
        }
    }
}
