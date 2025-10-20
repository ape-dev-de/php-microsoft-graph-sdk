<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailAddress resources
 *
 * Available select fields:
 * - address
 * - name
 */
class EmailAddressQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_NAME = 'name';

    /**
     * Select specific EmailAddress properties
     * 
     * @param array<string> $select Use EmailAddressQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
