<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationEventListener
 */
class AuthenticationEventListener
{
    /**
     * The identifier of the authenticationEventsFlow object.
     */
    private ?string $authenticationEventsFlowId;

    /**
     * The conditions on which this authenticationEventListener should trigger.
     */
    private ?string $conditions;

    public function getAuthenticationEventsFlowId(): ?string
    {
        return $this->authenticationEventsFlowId;
    }

    public function setAuthenticationEventsFlowId(?string $authenticationEventsFlowId): self
    {
        $this->authenticationEventsFlowId = $authenticationEventsFlowId;
        return $this;
    }

    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

}
