<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows81GeneralConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Windows81GeneralConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Windows81GeneralConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Windows81GeneralConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
