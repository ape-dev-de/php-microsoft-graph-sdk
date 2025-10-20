<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyBinding
 */
class PolicyBinding
{
    /**
     * Specifies the users or groups to be explicitly excluded from this policy scope. Can be null or empty.
     */
    private array $exclusions = [];

    /**
     * Specifies the users or groups to be included in this policy scope. Often set to tenantScope for 'All users'.
     */
    private ?string $inclusions;

    public function getExclusions(): array
    {
        return $this->exclusions;
    }

    public function setExclusions(array $exclusions): self
    {
        $this->exclusions = $exclusions;
        return $this;
    }

    public function getInclusions(): ?string
    {
        return $this->inclusions;
    }

    public function setInclusions(?string $inclusions): self
    {
        $this->inclusions = $inclusions;
        return $this;
    }

}
