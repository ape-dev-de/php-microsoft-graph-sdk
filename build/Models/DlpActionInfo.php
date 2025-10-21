<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DlpActionInfo
 */
class DlpActionInfo
{
    public function __construct(
        /** The type of DLP action. Possible value is restrictAccessAction. */
        public ?DlpAction $action = null
    ) {}
}
