<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterCreateOperation resources
 *
 * Available select fields:
 */
class PrinterCreateOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterCreateOperation
     */

    /**
     * Select specific PrinterCreateOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
