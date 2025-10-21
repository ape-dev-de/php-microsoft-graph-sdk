<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterFeedOrientation resources
 *
 * Available select fields:
 */
class PrinterFeedOrientationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterFeedOrientation
     */

    /**
     * Select specific PrinterFeedOrientation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
