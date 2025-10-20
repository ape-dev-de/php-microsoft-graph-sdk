<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskStatus resources
 *
 * Available select fields:
 * - description
 * - state
 */
class PrintTaskStatusQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_STATE = 'state';

    /**
     * Select specific PrintTaskStatus properties
     * 
     * @param array<string> $select Use PrintTaskStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
