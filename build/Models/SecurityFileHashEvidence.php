<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileHashEvidence
 */
class SecurityFileHashEvidence
{
    public function __construct(
        /**  */
        public ?string $algorithm = null,
        /**  */
        public ?string $value = null
    ) {}
}
