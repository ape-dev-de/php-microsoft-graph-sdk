<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityOcrSettings
 */
class SecurityOcrSettings
{
    public function __construct(
        /** Indicates whether or not OCR is enabled for the case. */
        public ?bool $isEnabled = null,
        /** Maximum image size that will be processed in KB). */
        public ?float $maxImageSize = null,
        /** The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time. */
        public ?string $timeout = null
    ) {}
}
