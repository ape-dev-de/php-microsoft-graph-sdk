<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteEntityBaseModel
 */
class OnenoteEntityBaseModel
{
    public function __construct(
        /** The endpoint where you can get details about the page. Read-only. */
        public ?string $self = null
    ) {}
}
