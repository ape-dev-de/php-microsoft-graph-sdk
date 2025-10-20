<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationFeatureCountCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserRegistrationFeatureCountCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserRegistrationFeatureCountCollectionResponse properties
     * 
     * @param array<string> $select Use UserRegistrationFeatureCountCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
