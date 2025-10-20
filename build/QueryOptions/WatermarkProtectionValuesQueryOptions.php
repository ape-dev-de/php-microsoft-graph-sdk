<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WatermarkProtectionValues resources
 *
 * Available select fields:
 * - isEnabledForContentSharing
 * - isEnabledForVideo
 */
class WatermarkProtectionValuesQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED_FOR_CONTENT_SHARING = 'isEnabledForContentSharing';
    public const FIELD_IS_ENABLED_FOR_VIDEO = 'isEnabledForVideo';

    /**
     * Select specific WatermarkProtectionValues properties
     * 
     * @param array<string> $select Use WatermarkProtectionValuesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
