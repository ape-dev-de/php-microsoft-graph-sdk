<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationGuardBlockFileTransferType resources
 *
 * Available select fields:
 */
class ApplicationGuardBlockFileTransferTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApplicationGuardBlockFileTransferType
     */

    /**
     * Select specific ApplicationGuardBlockFileTransferType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
