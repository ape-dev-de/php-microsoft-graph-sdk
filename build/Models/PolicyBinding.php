<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyBinding
 */
class PolicyBinding
{
    public function __construct(
        /** Specifies the users or groups to be explicitly excluded from this policy scope. Can be null or empty. */
        public array $exclusions = [],
        /** Specifies the users or groups to be included in this policy scope. Often set to tenantScope for 'All users'. */
        public array $inclusions = []
    ) {}
}
