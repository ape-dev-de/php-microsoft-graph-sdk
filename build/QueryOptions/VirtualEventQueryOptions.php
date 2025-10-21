<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEvent resources
 *
 * Available select fields:
 * - createdBy
 * - description
 * - displayName
 * - endDateTime
 * - externalEventInformation
 * - settings
 * - startDateTime
 * - status
 * - presenters
 * - sessions
 */
class VirtualEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEvent
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_EXTERNAL_EVENT_INFORMATION = 'externalEventInformation';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_PRESENTERS = 'presenters';
    public const FIELD_SESSIONS = 'sessions';

    /**
     * Select specific VirtualEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
