<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeleconferenceDeviceVideoQuality
 */
class TeleconferenceDeviceVideoQuality
{
    public function __construct(
        /** The average inbound stream video bit rate per second. */
        public ?string $averageInboundBitRate = null,
        /** The average inbound stream video frame rate per second. */
        public ?string $averageInboundFrameRate = null,
        /** The average outbound stream video bit rate per second. */
        public ?string $averageOutboundBitRate = null,
        /** The average outbound stream video frame rate per second. */
        public ?string $averageOutboundFrameRate = null
    ) {}
}
