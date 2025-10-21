<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterShare resources
 *
 * Available select fields:
 */
class PrinterShareQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterShare
     */

    /**
     * Select specific PrinterShare properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
