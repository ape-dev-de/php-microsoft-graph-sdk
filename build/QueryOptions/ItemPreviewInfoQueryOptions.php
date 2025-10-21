<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemPreviewInfo resources
 *
 * Available select fields:
 * - getUrl
 * - postParameters
 * - postUrl
 */
class ItemPreviewInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemPreviewInfo
     */
    public const FIELD_GET_URL = 'getUrl';
    public const FIELD_POST_PARAMETERS = 'postParameters';
    public const FIELD_POST_URL = 'postUrl';

    /**
     * Select specific ItemPreviewInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
