<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResetPasscodeActionResult resources
 *
 * Available select fields:
 * - errorCode
 * - passcode
 */
class ResetPasscodeActionResultQueryOptions extends QueryOptions
{
    public const FIELD_ERROR_CODE = 'errorCode';
    public const FIELD_PASSCODE = 'passcode';

    /**
     * Select specific ResetPasscodeActionResult properties
     * 
     * @param array<string> $select Use ResetPasscodeActionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
