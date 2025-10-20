<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceAccount resources
 *
 * Available select fields:
 * - password
 */
class WindowsDeviceAccountQueryOptions extends QueryOptions
{
    public const FIELD_PASSWORD = 'password';

    /**
     * Select specific WindowsDeviceAccount properties
     * 
     * @param array<string> $select Use WindowsDeviceAccountQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
