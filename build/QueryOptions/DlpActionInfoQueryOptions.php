<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DlpActionInfo resources
 *
 * Available select fields:
 * - action
 */
class DlpActionInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DlpActionInfo
     */
    public const FIELD_ACTION = 'action';

    /**
     * Select specific DlpActionInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
