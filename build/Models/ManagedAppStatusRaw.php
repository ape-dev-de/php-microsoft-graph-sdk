<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppStatusRaw
 */
class ManagedAppStatusRaw
{
    /**
     * Represents an un-typed status report about organizations app protection and configuration.
     */
    private ?string $content;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

}
