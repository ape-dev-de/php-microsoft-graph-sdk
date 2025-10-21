<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LabelContentRight resources
 *
 * Available select fields:
 * - cid
 * - format
 * - rights
 * - label
 */
class LabelContentRightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LabelContentRight
     */
    public const FIELD_CID = 'cid';
    public const FIELD_FORMAT = 'format';
    public const FIELD_RIGHTS = 'rights';
    public const FIELD_LABEL = 'label';

    /**
     * Select specific LabelContentRight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
