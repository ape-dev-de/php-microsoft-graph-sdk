<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsPhone81GeneralConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsPhone81GeneralConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsPhone81GeneralConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsPhone81GeneralConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
