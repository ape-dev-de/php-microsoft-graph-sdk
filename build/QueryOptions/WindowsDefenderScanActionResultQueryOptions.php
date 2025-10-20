<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDefenderScanActionResult resources
 *
 * Available select fields:
 * - scanType
 */
class WindowsDefenderScanActionResultQueryOptions extends QueryOptions
{
    public const FIELD_SCAN_TYPE = 'scanType';

    /**
     * Select specific WindowsDefenderScanActionResult properties
     * 
     * @param array<string> $select Use WindowsDefenderScanActionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
