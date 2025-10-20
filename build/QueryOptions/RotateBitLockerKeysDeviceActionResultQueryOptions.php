<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RotateBitLockerKeysDeviceActionResult resources
 *
 * Available select fields:
 * - errorCode
 */
class RotateBitLockerKeysDeviceActionResultQueryOptions extends QueryOptions
{
    public const FIELD_ERROR_CODE = 'errorCode';

    /**
     * Select specific RotateBitLockerKeysDeviceActionResult properties
     * 
     * @param array<string> $select Use RotateBitLockerKeysDeviceActionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
