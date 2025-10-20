<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AirPrintSettings resources
 *
 * Available select fields:
 * - incompatiblePrinters
 */
class AirPrintSettingsQueryOptions extends QueryOptions
{
    public const FIELD_INCOMPATIBLE_PRINTERS = 'incompatiblePrinters';

    /**
     * Select specific AirPrintSettings properties
     * 
     * @param array<string> $select Use AirPrintSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
