<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningStatusInfo resources
 *
 * Available select fields:
 * - errorInformation
 * - status
 */
class ProvisioningStatusInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningStatusInfo
     */
    public const FIELD_ERROR_INFORMATION = 'errorInformation';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ProvisioningStatusInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
