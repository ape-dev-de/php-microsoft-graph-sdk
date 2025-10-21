<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingBase64
 */
class OmaSettingBase64
{
    public function __construct(
        /** Description. */
        public ?string $description = null,
        /** Display Name. */
        public ?string $displayName = null,
        /** OMA Settings definition. */
        public ?string $omaUri = null,
        /** File name associated with the Value property (.cer */
        public ?string $fileName = null,
        /** OMA Settings Base64 definition. */
        public ?string $value = null
    ) {}
}
