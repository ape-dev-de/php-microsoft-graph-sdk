<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessFilter
 */
class ConditionalAccessFilter
{
    /**
     */
    private ?string $mode;

    /**
     * Rule syntax is similar to that used for membership rules for groups in Microsoft Entra ID. For details, see rules with multiple expressions
     */
    private ?string $rule;


    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    public function getRule(): ?string
    {
        return $this->rule;
    }

    public function setRule(?string $rule): self
    {
        $this->rule = $rule;
        return $this;
    }

}
