<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserPrint resources
 *
 * Available select fields:
 * - recentPrinterShares
 */
class UserPrintQueryOptions extends QueryOptions
{
    public const FIELD_RECENT_PRINTER_SHARES = 'recentPrinterShares';

    /**
     * Select specific UserPrint properties
     * 
     * @param array<string> $select Use UserPrintQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
