<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffReason resources
 *
 * Available select fields:
 * - code
 * - displayName
 * - iconType
 * - isActive
 */
class TimeOffReasonQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ICON_TYPE = 'iconType';
    public const FIELD_IS_ACTIVE = 'isActive';

    /**
     * Select specific TimeOffReason properties
     * 
     * @param array<string> $select Use TimeOffReasonQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
