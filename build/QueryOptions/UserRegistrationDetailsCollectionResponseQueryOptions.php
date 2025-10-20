<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationDetailsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserRegistrationDetailsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserRegistrationDetailsCollectionResponse properties
     * 
     * @param array<string> $select Use UserRegistrationDetailsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
