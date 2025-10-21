<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessAuthenticationFlows
 */
class ConditionalAccessAuthenticationFlows
{
    /**
     */
    private ?string $transferMethods;


    public function getTransferMethods(): ?string
    {
        return $this->transferMethods;
    }

    public function setTransferMethods(?string $transferMethods): self
    {
        $this->transferMethods = $transferMethods;
        return $this;
    }

}
