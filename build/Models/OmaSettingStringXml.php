<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingStringXml
 */
class OmaSettingStringXml
{
    public function __construct(
        /** File name associated with the Value property (.xml). */
        public ?string $fileName = null,
        /** OMA Settings StringXML definition. */
        public ?string $value = null
    ) {}
}
