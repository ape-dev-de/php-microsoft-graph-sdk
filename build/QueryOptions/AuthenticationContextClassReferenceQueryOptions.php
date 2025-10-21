<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationContextClassReference resources
 *
 * Available select fields:
 */
class AuthenticationContextClassReferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationContextClassReference
     */

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
