<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteOperationError resources
 *
 * Available select fields:
 * - code
 * - message
 */
class OnenoteOperationErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteOperationError
     */
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';

    /**
     * Select specific OnenoteOperationError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
