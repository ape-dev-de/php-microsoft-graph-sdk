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
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_AVAILABLE = 'isAvailable';

    /**
     * Select specific AuthenticationContextClassReference properties
     * 
     * @param array<string> $select Use AuthenticationContextClassReferenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
