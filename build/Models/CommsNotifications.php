<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsNotifications
 */
class CommsNotifications
{
    public function __construct(
        /** @var string[] The notification of a change in the resource. */
        public array $value = []
    ) {}
}
