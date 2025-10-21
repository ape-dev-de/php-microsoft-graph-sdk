<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingDateTime
 */
class OmaSettingDateTime
{
    public function __construct(
        /** Description. */
        public ?string $description = null,
        /** Display Name. */
        public ?string $displayName = null,
        /** OMA. */
        public ?string $omaUri = null,
        /** Value. */
        public ?\DateTimeInterface $value = null
    ) {}
}
