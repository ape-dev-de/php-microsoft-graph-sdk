<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationResource resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 */
class EducationResourceQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific EducationResource properties
     * 
     * @param array<string> $select Use EducationResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
