<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LicenseUnitsDetail resources
 *
 * Available select fields:
 * - enabled
 * - lockedOut
 * - suspended
 * - warning
 */
class LicenseUnitsDetailQueryOptions extends QueryOptions
{
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_LOCKED_OUT = 'lockedOut';
    public const FIELD_SUSPENDED = 'suspended';
    public const FIELD_WARNING = 'warning';

    /**
     * Select specific LicenseUnitsDetail properties
     * 
     * @param array<string> $select Use LicenseUnitsDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
