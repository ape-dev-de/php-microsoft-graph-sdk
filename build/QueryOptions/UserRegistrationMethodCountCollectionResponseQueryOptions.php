<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationMethodCountCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserRegistrationMethodCountCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserRegistrationMethodCountCollectionResponse properties
     * 
     * @param array<string> $select Use UserRegistrationMethodCountCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
