<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingStringXml
 */
class OmaSettingStringXml
{
    public function __construct(
        /** Description. */
        public ?string $description = null,
        /** Display Name. */
        public ?string $displayName = null,
        /** OMA. */
        public ?string $omaUri = null,
        /** File name associated with the Value property (.xml). */
        public ?string $fileName = null,
        /** Value. (UTF8 encoded byte array) */
        public ?string $value = null
    ) {}
}
