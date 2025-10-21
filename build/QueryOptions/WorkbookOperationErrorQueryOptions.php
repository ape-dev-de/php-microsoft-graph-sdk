<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookOperationError resources
 *
 * Available select fields:
 * - code
 * - innerError
 * - message
 */
class WorkbookOperationErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookOperationError
     */
    public const FIELD_CODE = 'code';
    public const FIELD_INNER_ERROR = 'innerError';
    public const FIELD_MESSAGE = 'message';

    /**
     * Select specific WorkbookOperationError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
