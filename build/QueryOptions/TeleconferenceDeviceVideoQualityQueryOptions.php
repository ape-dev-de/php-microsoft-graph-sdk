<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeleconferenceDeviceVideoQuality resources
 *
 * Available select fields:
 * - averageInboundBitRate
 * - averageInboundFrameRate
 * - averageOutboundBitRate
 * - averageOutboundFrameRate
 */
class TeleconferenceDeviceVideoQualityQueryOptions extends QueryOptions
{
    public const FIELD_AVERAGE_INBOUND_BIT_RATE = 'averageInboundBitRate';
    public const FIELD_AVERAGE_INBOUND_FRAME_RATE = 'averageInboundFrameRate';
    public const FIELD_AVERAGE_OUTBOUND_BIT_RATE = 'averageOutboundBitRate';
    public const FIELD_AVERAGE_OUTBOUND_FRAME_RATE = 'averageOutboundFrameRate';

    /**
     * Select specific TeleconferenceDeviceVideoQuality properties
     * 
     * @param array<string> $select Use TeleconferenceDeviceVideoQualityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
