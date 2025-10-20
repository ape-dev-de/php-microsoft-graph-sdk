<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceProvisioningError resources
 *
 * Available select fields:
 * - createdDateTime
 * - isResolved
 * - serviceInstance
 */
class ServiceProvisioningErrorQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_IS_RESOLVED = 'isResolved';
    public const FIELD_SERVICE_INSTANCE = 'serviceInstance';

    /**
     * Select specific ServiceProvisioningError properties
     * 
     * @param array<string> $select Use ServiceProvisioningErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
