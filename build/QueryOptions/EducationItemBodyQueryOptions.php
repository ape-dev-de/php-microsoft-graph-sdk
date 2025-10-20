<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationItemBody resources
 *
 * Available select fields:
 * - content
 * - contentType
 */
class EducationItemBodyQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_TYPE = 'contentType';

    /**
     * Select specific EducationItemBody properties
     * 
     * @param array<string> $select Use EducationItemBodyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
