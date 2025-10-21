<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesProvisioningError resources
 *
 * Available select fields:
 * - category
 * - occurredDateTime
 * - propertyCausingError
 * - value
 */
class OnPremisesProvisioningErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnPremisesProvisioningError
     */
    public const FIELD_CATEGORY = 'category';
    public const FIELD_OCCURRED_DATE_TIME = 'occurredDateTime';
    public const FIELD_PROPERTY_CAUSING_ERROR = 'propertyCausingError';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnPremisesProvisioningError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
