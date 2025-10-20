<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterShareViewpoint resources
 *
 * Available select fields:
 * - lastUsedDateTime
 */
class PrinterShareViewpointQueryOptions extends QueryOptions
{
    public const FIELD_LAST_USED_DATE_TIME = 'lastUsedDateTime';

    /**
     * Select specific PrinterShareViewpoint properties
     * 
     * @param array<string> $select Use PrinterShareViewpointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
