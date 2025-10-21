<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImageTaggingChoice resources
 *
 * Available select fields:
 */
class ImageTaggingChoiceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ImageTaggingChoice
     */

    /**
     * Select specific ImageTaggingChoice properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
