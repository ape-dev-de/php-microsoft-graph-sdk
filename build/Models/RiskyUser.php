<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyUser
 */
class RiskyUser
{
    /**
     * Indicates whether the user is deleted. Possible values are: true, false.
     */
    private ?bool $isDeleted;

    /**
     * Indicates whether the backend is processing a user's risky state.
     */
    private ?bool $isProcessing;

    /**
     * The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe. Use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.
     */
    private ?string $riskDetail;

    /**
     * The date and time that the risky user was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $riskLastUpdatedDateTime;

    /**
     * Level of the detected risky user. Possible values are: low, medium, high, hidden, none, unknownFutureValue.
     */
    private ?string $riskLevel;

    /**
     * State of the user''s risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     */
    private ?string $riskState;

    /**
     * Risky user display name.
     */
    private ?string $userDisplayName;

    /**
     * Risky user principal name.
     */
    private ?string $userPrincipalName;

    /**
     * The activity related to user risk level change
     * @var string[]
     */
    private array $history = [];


    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

    public function getIsProcessing(): ?bool
    {
        return $this->isProcessing;
    }

    public function setIsProcessing(?bool $isProcessing): self
    {
        $this->isProcessing = $isProcessing;
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

    public function getRiskLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->riskLastUpdatedDateTime;
    }

    public function setRiskLastUpdatedDateTime(?\DateTimeInterface $riskLastUpdatedDateTime): self
    {
        $this->riskLastUpdatedDateTime = $riskLastUpdatedDateTime;
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

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
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

    /**
     * @return string[]
     */
    public function getHistory(): array
    {
        return $this->history;
    }

    /**
     * @param string[] $history
     */
    public function setHistory(array $history): self
    {
        $this->history = $history;
        return $this;
    }

}
