<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsNotifications
 */
class CommsNotifications
{
    public function __construct(
        /** The notification of a change in the resource. */
        public array $value = []
    ) {}
}
