<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailIdentity resources
 *
 * Available select fields:
 * - email
 */
class EmailIdentityQueryOptions extends QueryOptions
{
    public const FIELD_EMAIL = 'email';

    /**
     * Select specific EmailIdentity properties
     * 
     * @param array<string> $select Use EmailIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
