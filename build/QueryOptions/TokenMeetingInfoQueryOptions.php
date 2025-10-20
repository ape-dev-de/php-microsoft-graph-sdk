<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TokenMeetingInfo resources
 *
 * Available select fields:
 * - token
 */
class TokenMeetingInfoQueryOptions extends QueryOptions
{
    public const FIELD_TOKEN = 'token';

    /**
     * Select specific TokenMeetingInfo properties
     * 
     * @param array<string> $select Use TokenMeetingInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
