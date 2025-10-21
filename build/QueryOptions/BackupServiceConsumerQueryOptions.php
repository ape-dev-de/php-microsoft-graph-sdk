<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BackupServiceConsumer resources
 *
 * Available select fields:
 */
class BackupServiceConsumerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BackupServiceConsumer
     */

    /**
     * Select specific BackupServiceConsumer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
