<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommsOperation resources
 *
 * Available select fields:
 * - clientContext
 * - resultInfo
 * - status
 */
class CommsOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommsOperation
     */
    public const FIELD_CLIENT_CONTEXT = 'clientContext';
    public const FIELD_RESULT_INFO = 'resultInfo';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific CommsOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
