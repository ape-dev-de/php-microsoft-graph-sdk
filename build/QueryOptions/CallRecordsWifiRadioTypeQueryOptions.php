<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsWifiRadioType resources
 *
 * Available select fields:
 */
class CallRecordsWifiRadioTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsWifiRadioType
     */

    /**
     * Select specific CallRecordsWifiRadioType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
