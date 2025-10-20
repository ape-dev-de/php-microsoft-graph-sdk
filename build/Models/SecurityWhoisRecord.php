<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisRecord
 */
class SecurityWhoisRecord
{
    /**
     * The collection of historical records associated to this WHOIS object.
     */
    private ?string $history;

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(?string $history): self
    {
        $this->history = $history;
        return $this;
    }

}
