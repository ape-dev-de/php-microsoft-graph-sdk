<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomAuthenticationExtension resources
 *
 * Available select fields:
 * - behaviorOnError
 */
class CustomAuthenticationExtensionQueryOptions extends QueryOptions
{
    public const FIELD_BEHAVIOR_ON_ERROR = 'behaviorOnError';

    /**
     * Select specific CustomAuthenticationExtension properties
     * 
     * @param array<string> $select Use CustomAuthenticationExtensionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
