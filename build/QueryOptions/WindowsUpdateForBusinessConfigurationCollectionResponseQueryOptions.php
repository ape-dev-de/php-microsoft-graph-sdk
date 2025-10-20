<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateForBusinessConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsUpdateForBusinessConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsUpdateForBusinessConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsUpdateForBusinessConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
