<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentSession resources
 *
 * Available select fields:
 * - content
 * - expirationDateTime
 * - nextExpectedRanges
 */
class AttachmentSessionQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_NEXT_EXPECTED_RANGES = 'nextExpectedRanges';

    /**
     * Select specific AttachmentSession properties
     * 
     * @param array<string> $select Use AttachmentSessionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
