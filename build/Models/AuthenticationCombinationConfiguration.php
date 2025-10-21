<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationCombinationConfiguration
 */
class AuthenticationCombinationConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Which authentication method combinations this configuration applies to. Must be an allowedCombinations object, part of the authenticationStrengthPolicy. The only possible value for fido2combinationConfigurations is 'fido2'. */
        public array $appliesToCombinations = []
    ) {}
}
