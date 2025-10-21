<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceParameter
 */
class IdentityGovernanceParameter
{
    public function __construct(
        /** The name of the parameter. */
        public ?string $name = null,
        /** @var string[] The values of the parameter. */
        public array $values = [],
        /**  */
        public ?string $valueType = null
    ) {}
}
