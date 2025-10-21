<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsNotification
 */
class CommsNotification
{
    public function __construct(
        /**  */
        public ?string $changeType = null,
        /** URI of the resource that was changed. */
        public ?string $resourceUrl = null
    ) {}
}
