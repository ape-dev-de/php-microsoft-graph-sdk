<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningErrorInfo resources
 *
 * Available select fields:
 * - additionalDetails
 * - errorCategory
 * - errorCode
 * - reason
 * - recommendedAction
 */
class ProvisioningErrorInfoQueryOptions extends QueryOptions
{
    public const FIELD_ADDITIONAL_DETAILS = 'additionalDetails';
    public const FIELD_ERROR_CATEGORY = 'errorCategory';
    public const FIELD_ERROR_CODE = 'errorCode';
    public const FIELD_REASON = 'reason';
    public const FIELD_RECOMMENDED_ACTION = 'recommendedAction';

    /**
     * Select specific ProvisioningErrorInfo properties
     * 
     * @param array<string> $select Use ProvisioningErrorInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
