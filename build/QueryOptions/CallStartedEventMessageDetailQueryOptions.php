<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallStartedEventMessageDetail resources
 *
 * Available select fields:
 * - callEventType
 * - callId
 * - initiator
 */
class CallStartedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallStartedEventMessageDetail
     */
    public const FIELD_CALL_EVENT_TYPE = 'callEventType';
    public const FIELD_CALL_ID = 'callId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific CallStartedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
