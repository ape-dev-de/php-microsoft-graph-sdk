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
        public ?ChangeType $changeType = null,
        /** URI of the resource that was changed. */
        public ?string $resourceUrl = null
    ) {}
}
