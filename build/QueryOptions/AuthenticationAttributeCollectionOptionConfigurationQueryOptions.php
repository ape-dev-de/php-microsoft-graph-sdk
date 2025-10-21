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
    /**
     * Available select fields for AuthenticationAttributeCollectionOptionConfiguration
     */
    public const FIELD_LABEL = 'label';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationAttributeCollectionOptionConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
