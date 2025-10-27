<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyUserHistoryItem
 */
class RiskyUserHistoryItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the user is deleted. Possible values are: true, false. */
    public ?bool $isDeleted = null;

    /** Indicates whether the backend is processing a user's risky state. */
    public ?bool $isProcessing = null;

    /** 
     * The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe. Use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.
     * @var RiskDetail|\stdClass|null
     */
    public mixed $riskDetail = null;

    /** The date and time that the risky user was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $riskLastUpdatedDateTime = null;

    /** 
     * Level of the detected risky user. Possible values are: low, medium, high, hidden, none, unknownFutureValue.
     * @var RiskLevel|\stdClass|null
     */
    public mixed $riskLevel = null;

    /** 
     * State of the user's risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     * @var RiskState|\stdClass|null
     */
    public mixed $riskState = null;

    /** Risky user display name. */
    public ?string $userDisplayName = null;

    /** Risky user principal name. */
    public ?string $userPrincipalName = null;

    /** 
     * The activity related to user risk level change
     * @var RiskyUserHistoryItem[]
     */
    public array $history = [];

    /** 
     * The activity related to user risk level change.
     * @var RiskUserActivity|\stdClass|null
     */
    public mixed $activity = null;

    /** The ID of actor that does the operation. */
    public ?string $initiatedBy = null;

    /** The ID of the user. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isDeleted'])) {
            $this->isDeleted = $data['isDeleted'];
        }
        if (isset($data['isProcessing'])) {
            $this->isProcessing = $data['isProcessing'];
        }
        if (isset($data['riskDetail'])) {
            $this->riskDetail = is_array($data['riskDetail']) ? new RiskDetail($data['riskDetail']) : $data['riskDetail'];
        }
        if (isset($data['riskLastUpdatedDateTime'])) {
            $this->riskLastUpdatedDateTime = is_string($data['riskLastUpdatedDateTime']) ? new \DateTimeImmutable($data['riskLastUpdatedDateTime']) : $data['riskLastUpdatedDateTime'];
        }
        if (isset($data['riskLevel'])) {
            $this->riskLevel = is_array($data['riskLevel']) ? new RiskLevel($data['riskLevel']) : $data['riskLevel'];
        }
        if (isset($data['riskState'])) {
            $this->riskState = is_array($data['riskState']) ? new RiskState($data['riskState']) : $data['riskState'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
        if (isset($data['history'])) {
            $this->history = $data['history'];
        }
        if (isset($data['activity'])) {
            $this->activity = is_array($data['activity']) ? new RiskUserActivity($data['activity']) : $data['activity'];
        }
        if (isset($data['initiatedBy'])) {
            $this->initiatedBy = $data['initiatedBy'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
