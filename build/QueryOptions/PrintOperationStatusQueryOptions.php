<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintOperationStatus resources
 *
 * Available select fields:
 * - description
 * - state
 */
class PrintOperationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintOperationStatus
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_STATE = 'state';

    /**
     * Select specific PrintOperationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
