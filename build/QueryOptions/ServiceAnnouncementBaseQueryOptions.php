<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAnnouncementBase resources
 *
 * Available select fields:
 * - details
 * - endDateTime
 * - lastModifiedDateTime
 * - startDateTime
 * - title
 */
class ServiceAnnouncementBaseQueryOptions extends QueryOptions
{
    public const FIELD_DETAILS = 'details';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific ServiceAnnouncementBase properties
     * 
     * @param array<string> $select Use ServiceAnnouncementBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
