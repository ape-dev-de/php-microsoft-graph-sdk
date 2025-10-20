<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessageResponse resources
 *
 * Available select fields:
 * - proposedNewTime
 * - responseType
 */
class EventMessageResponseQueryOptions extends QueryOptions
{
    public const FIELD_PROPOSED_NEW_TIME = 'proposedNewTime';
    public const FIELD_RESPONSE_TYPE = 'responseType';

    /**
     * Select specific EventMessageResponse properties
     * 
     * @param array<string> $select Use EventMessageResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
