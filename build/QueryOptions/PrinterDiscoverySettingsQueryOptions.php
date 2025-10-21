<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterDiscoverySettings resources
 *
 * Available select fields:
 * - airPrint
 */
class PrinterDiscoverySettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterDiscoverySettings
     */
    public const FIELD_AIR_PRINT = 'airPrint';

    /**
     * Select specific PrinterDiscoverySettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
