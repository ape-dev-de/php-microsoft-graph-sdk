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
     */
    private ?string $detail;

    /**
     * The type of risk event detected.
     * @var string[]
     */
    private array $riskEventTypes = [];


    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRiskEventTypes(): array
    {
        return $this->riskEventTypes;
    }

    /**
     * @param string[] $riskEventTypes
     */
    public function setRiskEventTypes(array $riskEventTypes): self
    {
        $this->riskEventTypes = $riskEventTypes;
        return $this;
    }

}
