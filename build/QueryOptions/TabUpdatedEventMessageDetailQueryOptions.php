<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TabUpdatedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - tabId
 */
class TabUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TAB_ID = 'tabId';

    /**
     * Select specific TabUpdatedEventMessageDetail properties
     * 
     * @param array<string> $select Use TabUpdatedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
