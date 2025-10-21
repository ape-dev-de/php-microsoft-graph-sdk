<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionGrantPolicy
 */
class PermissionGrantPolicy
{
    /**
     * Condition sets that are excluded in this permission grant policy. Automatically expanded on GET.
     */
    private array $excludes = [];

    /**
     * Condition sets that are included in this permission grant policy. Automatically expanded on GET.
     * @var string[]
     */
    private array $includes = [];


    public function getExcludes(): array
    {
        return $this->excludes;
    }

    public function setExcludes(array $excludes): self
    {
        $this->excludes = $excludes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludes(): array
    {
        return $this->includes;
    }

    /**
     * @param string[] $includes
     */
    public function setIncludes(array $includes): self
    {
        $this->includes = $includes;
        return $this;
    }

}
