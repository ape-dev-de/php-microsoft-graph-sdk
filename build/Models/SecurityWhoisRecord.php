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
     * @var string[]
     */
    private array $history = [];


    /**
     * @return string[]
     */
    public function getHistory(): array
    {
        return $this->history;
    }

    /**
     * @param string[] $history
     */
    public function setHistory(array $history): self
    {
        $this->history = $history;
        return $this;
    }

}
