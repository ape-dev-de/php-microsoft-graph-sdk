<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppliedConditionalAccessPolicy
 */
class AppliedConditionalAccessPolicy
{
    /**
     * Refers to the name of the conditional access policy (example: ''Require MFA for Salesforce'').
     */
    private ?string $displayName;

    /**
     * Refers to the grant controls enforced by the conditional access policy (example: ''Require multifactor authentication'').
     */
    private ?string $enforcedGrantControls;

    /**
     * Refers to the session controls enforced by the conditional access policy (example: ''Require app enforced controls'').
     */
    private ?string $enforcedSessionControls;

    /**
     * An identifier of the conditional access policy. Supports $filter (eq).
     */
    private ?string $id;

    /**
     * Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (policy isn''t applied because policy conditions weren''t met), notEnabled (This is due to the policy in a disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     */
    private ?string $result;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEnforcedGrantControls(): ?string
    {
        return $this->enforcedGrantControls;
    }

    public function setEnforcedGrantControls(?string $enforcedGrantControls): self
    {
        $this->enforcedGrantControls = $enforcedGrantControls;
        return $this;
    }

    public function getEnforcedSessionControls(): ?string
    {
        return $this->enforcedSessionControls;
    }

    public function setEnforcedSessionControls(?string $enforcedSessionControls): self
    {
        $this->enforcedSessionControls = $enforcedSessionControls;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;
        return $this;
    }

}
