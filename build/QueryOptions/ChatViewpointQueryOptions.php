<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatViewpoint resources
 *
 * Available select fields:
 * - isHidden
 * - lastMessageReadDateTime
 */
class ChatViewpointQueryOptions extends QueryOptions
{
    public const FIELD_IS_HIDDEN = 'isHidden';
    public const FIELD_LAST_MESSAGE_READ_DATE_TIME = 'lastMessageReadDateTime';

    /**
     * Select specific ChatViewpoint properties
     * 
     * @param array<string> $select Use ChatViewpointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
