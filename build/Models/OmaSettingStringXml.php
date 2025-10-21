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
        /** OMA Settings definition. */
        public ?string $omaUri = null,
        /** File name associated with the Value property (.xml). */
        public ?string $fileName = null,
        /** OMA Settings StringXML definition. */
        public ?string $value = null
    ) {}
}
