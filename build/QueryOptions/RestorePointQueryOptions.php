<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorePoint resources
 *
 * Available select fields:
 * - expirationDateTime
 * - protectionDateTime
 * - tags
 * - protectionUnit
 */
class RestorePointQueryOptions extends QueryOptions
{
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_PROTECTION_DATE_TIME = 'protectionDateTime';
    public const FIELD_TAGS = 'tags';
    public const FIELD_PROTECTION_UNIT = 'protectionUnit';

    /**
     * Select specific RestorePoint properties
     * 
     * @param array<string> $select Use RestorePointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
