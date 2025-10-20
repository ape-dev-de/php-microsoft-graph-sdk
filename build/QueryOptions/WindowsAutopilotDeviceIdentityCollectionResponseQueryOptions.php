<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAutopilotDeviceIdentityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsAutopilotDeviceIdentityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsAutopilotDeviceIdentityCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsAutopilotDeviceIdentityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
