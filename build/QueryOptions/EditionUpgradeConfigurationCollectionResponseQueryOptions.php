<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EditionUpgradeConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EditionUpgradeConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EditionUpgradeConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use EditionUpgradeConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
