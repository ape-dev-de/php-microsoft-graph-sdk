<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppliedConditionalAccessPolicy
 */
class AppliedConditionalAccessPolicy
{
    public function __construct(
        /** An identifier of the conditional access policy. Supports $filter (eq). */
        public ?string $id = null,
        /** Refers to the name of the conditional access policy (example: 'Require MFA for Salesforce'). */
        public ?string $displayName = null,
        /** @var string[] Refers to the grant controls enforced by the conditional access policy (example: 'Require multifactor authentication'). */
        public array $enforcedGrantControls = [],
        /** @var string[] Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls'). */
        public array $enforcedSessionControls = [],
        /** Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (policy isn't applied because policy conditions weren't met), notEnabled (This is due to the policy in a disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. */
        public ?AppliedConditionalAccessPolicyResult $result = null
    ) {}
}
