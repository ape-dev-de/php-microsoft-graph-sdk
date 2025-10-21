<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertDetection
 */
class AlertDetection
{
    public function __construct(
        /**  */
        public ?string $detectionType = null,
        /**  */
        public ?string $method = null,
        /**  */
        public ?string $name = null
    ) {}
}
