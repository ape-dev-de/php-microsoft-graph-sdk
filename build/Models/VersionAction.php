<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VersionAction
 */
class VersionAction
{
    public function __construct(
        /** The name of the new version that was created by this action. */
        public ?string $newVersion = null
    ) {}
}
