<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SamlOrWsFedProviderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SamlOrWsFedProviderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SamlOrWsFedProviderCollectionResponse properties
     * 
     * @param array<string> $select Use SamlOrWsFedProviderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
