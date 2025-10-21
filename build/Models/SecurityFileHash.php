<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileHash
 */
class SecurityFileHash
{
    public function __construct(
        /**  */
        public ?SecurityFileHashAlgorithm $algorithm = null,
        /** The hash value. */
        public ?string $value = null
    ) {}
}
