<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTag resources
 *
 * Available select fields:
 * - createdBy
 * - description
 * - displayName
 * - lastModifiedDateTime
 */
class SecurityTagQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTag
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific SecurityTag properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
