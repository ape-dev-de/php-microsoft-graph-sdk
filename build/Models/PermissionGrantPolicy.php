<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionGrantPolicy
 */
class PermissionGrantPolicy
{
    public function __construct(
        /** Condition sets that are excluded in this permission grant policy. Automatically expanded on GET. */
        public array $excludes = [],
        /** @var string[] Condition sets that are included in this permission grant policy. Automatically expanded on GET. */
        public array $includes = []
    ) {}
}
