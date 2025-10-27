<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppliedConditionalAccessPolicy
 */
class AppliedConditionalAccessPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** An identifier of the conditional access policy. Supports $filter (eq). */
    public ?string $id = null;

    /** Refers to the name of the conditional access policy (example: 'Require MFA for Salesforce'). */
    public ?string $displayName = null;

    /** 
     * Refers to the grant controls enforced by the conditional access policy (example: 'Require multifactor authentication').
     * @var string[]
     */
    public array $enforcedGrantControls = [];

    /** 
     * Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     * @var string[]
     */
    public array $enforcedSessionControls = [];

    /** 
     * Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (policy isn't applied because policy conditions weren't met), notEnabled (This is due to the policy in a disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     * @var AppliedConditionalAccessPolicyResult|\stdClass|null
     */
    public AppliedConditionalAccessPolicyResult|\stdClass|null $result = null;


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['enforcedGrantControls'])) {
            $this->enforcedGrantControls = $data['enforcedGrantControls'];
        }
        if (isset($data['enforcedSessionControls'])) {
            $this->enforcedSessionControls = $data['enforcedSessionControls'];
        }
        if (isset($data['result'])) {
            $this->result = is_string($data['result']) ? AppliedConditionalAccessPolicyResult::tryFrom($data['result']) : $data['result'];
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
