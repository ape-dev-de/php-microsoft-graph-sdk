<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSecretKeyStringValuePair
 */
class SynchronizationSecretKeyStringValuePair
{
    public function __construct(
        /**  */
        public ?string $key = null,
        /** The value of the secret. */
        public ?string $value = null
    ) {}
}
