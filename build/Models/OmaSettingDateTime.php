<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingDateTime
 */
class OmaSettingDateTime
{
    public function __construct(
        /** OMA Settings DateTime definition. */
        public ?\DateTimeInterface $value = null
    ) {}
}
