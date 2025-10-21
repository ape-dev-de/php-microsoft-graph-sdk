<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingString
 */
class OmaSettingString
{
    public function __construct(
        /** Description. */
        public ?string $description = null,
        /** Display Name. */
        public ?string $displayName = null,
        /** OMA. */
        public ?string $omaUri = null,
        /** Value. */
        public ?string $value = null
    ) {}
}
