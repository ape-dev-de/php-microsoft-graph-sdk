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
     * @var string[]
     */
    private array $inclusions = [];


    public function getExclusions(): array
    {
        return $this->exclusions;
    }

    public function setExclusions(array $exclusions): self
    {
        $this->exclusions = $exclusions;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getInclusions(): array
    {
        return $this->inclusions;
    }

    /**
     * @param string[] $inclusions
     */
    public function setInclusions(array $inclusions): self
    {
        $this->inclusions = $inclusions;
        return $this;
    }

}
