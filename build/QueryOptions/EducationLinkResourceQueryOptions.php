<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationLinkResource resources
 *
 * Available select fields:
 * - link
 */
class EducationLinkResourceQueryOptions extends QueryOptions
{
    public const FIELD_LINK = 'link';

    /**
     * Select specific EducationLinkResource properties
     * 
     * @param array<string> $select Use EducationLinkResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
