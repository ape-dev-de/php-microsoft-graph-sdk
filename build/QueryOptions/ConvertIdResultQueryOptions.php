<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConvertIdResult resources
 *
 * Available select fields:
 * - errorDetails
 * - sourceId
 * - targetId
 */
class ConvertIdResultQueryOptions extends QueryOptions
{
    public const FIELD_ERROR_DETAILS = 'errorDetails';
    public const FIELD_SOURCE_ID = 'sourceId';
    public const FIELD_TARGET_ID = 'targetId';

    /**
     * Select specific ConvertIdResult properties
     * 
     * @param array<string> $select Use ConvertIdResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
