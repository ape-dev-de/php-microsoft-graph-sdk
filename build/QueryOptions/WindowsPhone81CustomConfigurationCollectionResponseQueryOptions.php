<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsPhone81CustomConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsPhone81CustomConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsPhone81CustomConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsPhone81CustomConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
