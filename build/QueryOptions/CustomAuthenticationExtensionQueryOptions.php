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
    /**
     * Available select fields for CustomAuthenticationExtension
     */
    public const FIELD_BEHAVIOR_ON_ERROR = 'behaviorOnError';

    /**
     * Select specific CustomAuthenticationExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
