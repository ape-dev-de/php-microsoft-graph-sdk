<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10TeamGeneralConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Windows10TeamGeneralConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Windows10TeamGeneralConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Windows10TeamGeneralConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
