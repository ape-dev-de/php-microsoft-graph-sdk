<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLogCollectionTemplateType resources
 *
 * Available select fields:
 */
class DeviceLogCollectionTemplateTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceLogCollectionTemplateType
     */

    /**
     * Select specific DeviceLogCollectionTemplateType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
