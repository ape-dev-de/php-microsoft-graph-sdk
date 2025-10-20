<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AutomaticRepliesMailTips resources
 *
 * Available select fields:
 * - message
 * - messageLanguage
 * - scheduledEndTime
 * - scheduledStartTime
 */
class AutomaticRepliesMailTipsQueryOptions extends QueryOptions
{
    public const FIELD_MESSAGE = 'message';
    public const FIELD_MESSAGE_LANGUAGE = 'messageLanguage';
    public const FIELD_SCHEDULED_END_TIME = 'scheduledEndTime';
    public const FIELD_SCHEDULED_START_TIME = 'scheduledStartTime';

    /**
     * Select specific AutomaticRepliesMailTips properties
     * 
     * @param array<string> $select Use AutomaticRepliesMailTipsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
