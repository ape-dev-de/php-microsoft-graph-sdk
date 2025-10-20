<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessContentBatchRequest resources
 *
 * Available select fields:
 * - contentToProcess
 * - requestId
 * - userId
 */
class ProcessContentBatchRequestQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_TO_PROCESS = 'contentToProcess';
    public const FIELD_REQUEST_ID = 'requestId';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific ProcessContentBatchRequest properties
     * 
     * @param array<string> $select Use ProcessContentBatchRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
