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
    /**
     * Available select fields for EmailAddress
     */
    public const FIELD_ADDRESS = 'address';
    public const FIELD_NAME = 'name';

    /**
     * Select specific EmailAddress properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
