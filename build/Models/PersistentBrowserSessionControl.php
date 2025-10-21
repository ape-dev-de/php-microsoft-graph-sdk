<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersistentBrowserSessionControl
 */
class PersistentBrowserSessionControl
{
    public function __construct(
        /** Specifies whether the session control is enabled. */
        public ?bool $isEnabled = null,
        /** Possible values are: always, never. */
        public ?PersistentBrowserSessionMode $mode = null
    ) {}
}
