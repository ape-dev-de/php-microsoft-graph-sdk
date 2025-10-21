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
    /**
     * Available select fields for RotateBitLockerKeysDeviceActionResult
     */
    public const FIELD_ERROR_CODE = 'errorCode';

    /**
     * Select specific RotateBitLockerKeysDeviceActionResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
