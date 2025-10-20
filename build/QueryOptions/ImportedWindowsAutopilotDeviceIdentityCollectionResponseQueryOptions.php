<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImportedWindowsAutopilotDeviceIdentityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ImportedWindowsAutopilotDeviceIdentityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ImportedWindowsAutopilotDeviceIdentityCollectionResponse properties
     * 
     * @param array<string> $select Use ImportedWindowsAutopilotDeviceIdentityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
