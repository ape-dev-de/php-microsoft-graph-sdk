<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswerString
 */
class AccessPackageAnswerString
{
    public function __construct(
        /** The localized display value shown to the requestor and approvers. */
        public ?string $displayValue = null,
        /**  */
        public ?AccessPackageQuestion $answeredQuestion = null,
        /** The value stored on the requestor's user profile, if this answer is configured to be stored as a specific attribute. */
        public ?string $value = null
    ) {}
}
