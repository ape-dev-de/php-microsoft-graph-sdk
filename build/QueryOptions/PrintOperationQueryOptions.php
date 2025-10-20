<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintOperation resources
 *
 * Available select fields:
 * - createdDateTime
 * - status
 */
class PrintOperationQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific PrintOperation properties
     * 
     * @param array<string> $select Use PrintOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
