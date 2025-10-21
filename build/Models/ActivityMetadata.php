<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityMetadata
 */
class ActivityMetadata
{
    public function __construct(
        /**  */
        public ?UserActivityType $activity = null
    ) {}
}
