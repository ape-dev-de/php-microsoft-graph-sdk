<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedApp
 */
class ManagedApp
{
    public function __construct(
        /**  */
        public ?string $appAvailability = null,
        /** Abstract class that contains properties and inherited properties for apps that you can manage with an Intune app protection policy. */
        public ?string $version = null
    ) {}
}
