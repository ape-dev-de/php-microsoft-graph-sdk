<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PresenceStatusMessage resources
 *
 * Available select fields:
 * - expiryDateTime
 * - message
 * - publishedDateTime
 */
class PresenceStatusMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PresenceStatusMessage
     */
    public const FIELD_EXPIRY_DATE_TIME = 'expiryDateTime';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_PUBLISHED_DATE_TIME = 'publishedDateTime';

    /**
     * Select specific PresenceStatusMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
