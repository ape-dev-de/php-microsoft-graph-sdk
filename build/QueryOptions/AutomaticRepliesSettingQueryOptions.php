<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AutomaticRepliesSetting resources
 *
 * Available select fields:
 * - externalAudience
 * - externalReplyMessage
 * - internalReplyMessage
 * - scheduledEndDateTime
 * - scheduledStartDateTime
 * - status
 */
class AutomaticRepliesSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AutomaticRepliesSetting
     */
    public const FIELD_EXTERNAL_AUDIENCE = 'externalAudience';
    public const FIELD_EXTERNAL_REPLY_MESSAGE = 'externalReplyMessage';
    public const FIELD_INTERNAL_REPLY_MESSAGE = 'internalReplyMessage';
    public const FIELD_SCHEDULED_END_DATE_TIME = 'scheduledEndDateTime';
    public const FIELD_SCHEDULED_START_DATE_TIME = 'scheduledStartDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific AutomaticRepliesSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
