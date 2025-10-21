<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationContextClassReference resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - isAvailable
 */
class AuthenticationContextClassReferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationContextClassReference
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_AVAILABLE = 'isAvailable';

    /**
     * Select specific AuthenticationContextClassReference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
