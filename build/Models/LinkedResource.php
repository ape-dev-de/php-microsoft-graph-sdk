<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LinkedResource
 */
class LinkedResource
{
    public function __construct(
        /** The app name of the source that sends the linkedResource. */
        public ?string $applicationName = null,
        /** The title of the linkedResource. */
        public ?string $displayName = null,
        /** ID of the object that is associated with this task on the third-party/partner system. */
        public ?string $externalId = null,
        /** Deep link to the linkedResource. */
        public ?string $webUrl = null
    ) {}
}
