<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatRestrictions
 */
class ChatRestrictions
{
    /**
     * Indicates whether only text is allowed in the meeting chat. Optional.
     */
    private ?string $allowTextOnly;


    public function getAllowTextOnly(): ?string
    {
        return $this->allowTextOnly;
    }

    public function setAllowTextOnly(?string $allowTextOnly): self
    {
        $this->allowTextOnly = $allowTextOnly;
        return $this;
    }

}
