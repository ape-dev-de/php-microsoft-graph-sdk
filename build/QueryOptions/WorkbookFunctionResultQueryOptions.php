<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFunctionResult resources
 *
 * Available select fields:
 * - error
 */
class WorkbookFunctionResultQueryOptions extends QueryOptions
{
    public const FIELD_ERROR = 'error';

    /**
     * Select specific WorkbookFunctionResult properties
     * 
     * @param array<string> $select Use WorkbookFunctionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
