<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPolicyDetail
 */
class ConditionalAccessPolicyDetail
{
    /**
     */
    private ?string $conditions;

    /**
     * Represents grant controls that must be fulfilled for the policy.
     */
    private ?string $grantControls;

    /**
     * Represents a complex type of session controls that is enforced after sign-in.
     */
    private ?string $sessionControls;


    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function getGrantControls(): ?string
    {
        return $this->grantControls;
    }

    public function setGrantControls(?string $grantControls): self
    {
        $this->grantControls = $grantControls;
        return $this;
    }

    public function getSessionControls(): ?string
    {
        return $this->sessionControls;
    }

    public function setSessionControls(?string $sessionControls): self
    {
        $this->sessionControls = $sessionControls;
        return $this;
    }

}
