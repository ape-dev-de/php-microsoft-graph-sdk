<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentActivity resources
 *
 * Available select fields:
 * - contentMetadata
 * - scopeIdentifier
 * - userId
 */
class ContentActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentActivity
     */
    public const FIELD_CONTENT_METADATA = 'contentMetadata';
    public const FIELD_SCOPE_IDENTIFIER = 'scopeIdentifier';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific ContentActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
