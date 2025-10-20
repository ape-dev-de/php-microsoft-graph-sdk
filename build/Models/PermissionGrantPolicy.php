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
     */
    private ?string $includes;

    public function getExcludes(): array
    {
        return $this->excludes;
    }

    public function setExcludes(array $excludes): self
    {
        $this->excludes = $excludes;
        return $this;
    }

    public function getIncludes(): ?string
    {
        return $this->includes;
    }

    public function setIncludes(?string $includes): self
    {
        $this->includes = $includes;
        return $this;
    }

}
