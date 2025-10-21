<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Modality resources
 *
 * Available select fields:
 */
class ModalityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Modality
     */

    /**
     * Select specific Modality properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
