<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryReviewTag resources
 *
 * Available select fields:
 * - childSelectability
 * - childTags
 * - parent
 */
class SecurityEdiscoveryReviewTagQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryReviewTag
     */
    public const FIELD_CHILD_SELECTABILITY = 'childSelectability';
    public const FIELD_CHILD_TAGS = 'childTags';
    public const FIELD_PARENT = 'parent';

    /**
     * Select specific SecurityEdiscoveryReviewTag properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
