<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceProvisioningXmlError resources
 *
 * Available select fields:
 * - errorDetail
 */
class ServiceProvisioningXmlErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceProvisioningXmlError
     */
    public const FIELD_ERROR_DETAIL = 'errorDetail';

    /**
     * Select specific ServiceProvisioningXmlError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
