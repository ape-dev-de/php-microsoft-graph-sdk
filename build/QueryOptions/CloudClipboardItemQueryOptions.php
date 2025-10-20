<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudClipboardItem resources
 *
 * Available select fields:
 * - createdDateTime
 * - expirationDateTime
 * - lastModifiedDateTime
 * - payloads
 */
class CloudClipboardItemQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PAYLOADS = 'payloads';

    /**
     * Select specific CloudClipboardItem properties
     * 
     * @param array<string> $select Use CloudClipboardItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
