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
    /**
     * Available select fields for UserPrint
     */
    public const FIELD_RECENT_PRINTER_SHARES = 'recentPrinterShares';

    /**
     * Select specific UserPrint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
