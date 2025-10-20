<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRule
 */
class Win32LobAppRule
{
    /**
     * A base complex type to store the detection or requirement rule data for a Win32 LOB app.
     */
    private ?string $ruleType;

    public function getRuleType(): ?string
    {
        return $this->ruleType;
    }

    public function setRuleType(?string $ruleType): self
    {
        $this->ruleType = $ruleType;
        return $this;
    }

}
