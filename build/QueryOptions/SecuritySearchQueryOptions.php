<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySearch resources
 *
 * Available select fields:
 * - contentQuery
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 */
class SecuritySearchQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_QUERY = 'contentQuery';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific SecuritySearch properties
     * 
     * @param array<string> $select Use SecuritySearchQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
