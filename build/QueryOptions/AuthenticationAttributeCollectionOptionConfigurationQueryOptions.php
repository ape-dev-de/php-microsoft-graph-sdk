<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationAttributeCollectionOptionConfiguration resources
 *
 * Available select fields:
 * - label
 * - value
 */
class AuthenticationAttributeCollectionOptionConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_LABEL = 'label';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationAttributeCollectionOptionConfiguration properties
     * 
     * @param array<string> $select Use AuthenticationAttributeCollectionOptionConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
