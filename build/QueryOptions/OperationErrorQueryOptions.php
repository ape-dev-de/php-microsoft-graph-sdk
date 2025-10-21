<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OperationError resources
 *
 * Available select fields:
 * - code
 * - message
 */
class OperationErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OperationError
     */
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';

    /**
     * Select specific OperationError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
