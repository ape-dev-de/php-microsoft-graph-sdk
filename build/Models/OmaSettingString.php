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
        /** OMA Settings definition. */
        public ?string $omaUri = null,
        /** OMA Settings String definition. */
        public ?string $value = null
    ) {}
}
