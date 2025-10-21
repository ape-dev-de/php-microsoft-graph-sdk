<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HyperlinkOrPictureColumn resources
 *
 * Available select fields:
 * - isPicture
 */
class HyperlinkOrPictureColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HyperlinkOrPictureColumn
     */
    public const FIELD_IS_PICTURE = 'isPicture';

    /**
     * Select specific HyperlinkOrPictureColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
