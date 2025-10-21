<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswer
 */
class AccessPackageAnswer
{
    public function __construct(
        /** The localized display value shown to the requestor and approvers. */
        public ?string $displayValue = null,
        /**  */
        public ?AccessPackageQuestion $answeredQuestion = null
    ) {}
}
