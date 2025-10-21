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
    /**
     * Available select fields for AirPrintSettings
     */
    public const FIELD_INCOMPATIBLE_PRINTERS = 'incompatiblePrinters';

    /**
     * Select specific AirPrintSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
