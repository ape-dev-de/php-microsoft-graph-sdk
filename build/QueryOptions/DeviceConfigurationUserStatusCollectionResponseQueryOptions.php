<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationUserStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceConfigurationUserStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceConfigurationUserStatusCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceConfigurationUserStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
