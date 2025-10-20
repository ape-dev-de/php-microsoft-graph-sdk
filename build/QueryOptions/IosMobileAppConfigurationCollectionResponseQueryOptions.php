<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosMobileAppConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosMobileAppConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosMobileAppConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use IosMobileAppConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
