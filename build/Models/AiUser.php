<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiUser
 */
class AiUser
{
    /**
     */
    private ?string $interactionHistory;

    public function getInteractionHistory(): ?string
    {
        return $this->interactionHistory;
    }

    public function setInteractionHistory(?string $interactionHistory): self
    {
        $this->interactionHistory = $interactionHistory;
        return $this;
    }

}
