<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronization
 */
class OnPremisesDirectorySynchronization
{
    public function __construct(
        /** Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant. Nullable. */
        public ?string $configuration = null,
        /**  */
        public ?string $features = null
    ) {}
}
