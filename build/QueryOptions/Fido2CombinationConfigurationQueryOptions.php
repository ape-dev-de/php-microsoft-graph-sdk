<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2CombinationConfiguration resources
 *
 * Available select fields:
 * - allowedAAGUIDs
 */
class Fido2CombinationConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_AAGUIDS = 'allowedAAGUIDs';

    /**
     * Select specific Fido2CombinationConfiguration properties
     * 
     * @param array<string> $select Use Fido2CombinationConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
