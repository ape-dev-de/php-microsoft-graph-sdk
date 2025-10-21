<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthoredNote resources
 *
 * Available select fields:
 * - author
 * - content
 * - createdDateTime
 */
class AuthoredNoteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthoredNote
     */
    public const FIELD_AUTHOR = 'author';
    public const FIELD_CONTENT = 'content';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';

    /**
     * Select specific AuthoredNote properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
