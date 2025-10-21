<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WatermarkProtectionValues
 */
class WatermarkProtectionValues
{
    public function __construct(
        /** Indicates whether to apply a watermark to any shared content. */
        public ?bool $isEnabledForContentSharing = null,
        /** Indicates whether to apply a watermark to everyone's video feed. */
        public ?bool $isEnabledForVideo = null
    ) {}
}
