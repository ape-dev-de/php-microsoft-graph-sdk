<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleItem resources
 *
 * Available select fields:
 * - end
 * - isPrivate
 * - location
 * - start
 * - status
 * - subject
 */
class ScheduleItemQueryOptions extends QueryOptions
{
    public const FIELD_END = 'end';
    public const FIELD_IS_PRIVATE = 'isPrivate';
    public const FIELD_LOCATION = 'location';
    public const FIELD_START = 'start';
    public const FIELD_STATUS = 'status';
    public const FIELD_SUBJECT = 'subject';

    /**
     * Select specific ScheduleItem properties
     * 
     * @param array<string> $select Use ScheduleItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
