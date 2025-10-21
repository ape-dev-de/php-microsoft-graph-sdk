<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInStatus resources
 *
 * Available select fields:
 * - additionalDetails
 * - errorCode
 * - failureReason
 */
class SignInStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignInStatus
     */
    public const FIELD_ADDITIONAL_DETAILS = 'additionalDetails';
    public const FIELD_ERROR_CODE = 'errorCode';
    public const FIELD_FAILURE_REASON = 'failureReason';

    /**
     * Select specific SignInStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
