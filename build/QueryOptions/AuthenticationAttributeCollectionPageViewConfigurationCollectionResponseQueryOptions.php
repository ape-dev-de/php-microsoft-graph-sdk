<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationAttributeCollectionPageViewConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationAttributeCollectionPageViewConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationAttributeCollectionPageViewConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationAttributeCollectionPageViewConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
