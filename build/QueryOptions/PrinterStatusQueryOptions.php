<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterStatus resources
 *
 * Available select fields:
 * - description
 * - details
 * - state
 */
class PrinterStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterStatus
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETAILS = 'details';
    public const FIELD_STATE = 'state';

    /**
     * Select specific PrinterStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
