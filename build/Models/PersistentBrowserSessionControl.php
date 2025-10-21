<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersistentBrowserSessionControl
 */
class PersistentBrowserSessionControl
{
    public function __construct(
        /** Possible values are: always, never. */
        public ?string $mode = null
    ) {}
}
