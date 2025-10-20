<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintJobStatus resources
 *
 * Available select fields:
 * - description
 * - details
 * - isAcquiredByPrinter
 * - state
 */
class PrintJobStatusQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETAILS = 'details';
    public const FIELD_IS_ACQUIRED_BY_PRINTER = 'isAcquiredByPrinter';
    public const FIELD_STATE = 'state';

    /**
     * Select specific PrintJobStatus properties
     * 
     * @param array<string> $select Use PrintJobStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
