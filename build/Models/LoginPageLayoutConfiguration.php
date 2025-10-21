<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPageLayoutConfiguration
 */
class LoginPageLayoutConfiguration
{
    public function __construct(
        /** Option to show the footer on the sign-in page. */
        public ?bool $isFooterShown = null,
        /** Option to show the header on the sign-in page. */
        public ?bool $isHeaderShown = null,
        /** Represents the layout template to be displayed on the login page for a tenant. The possible values are  default - Represents the default Microsoft layout with a centered lightbox.  verticalSplit - Represents a layout with a background on the left side and a full-height lightbox to the right.  unknownFutureValue - Evolvable enumeration sentinel value. Don't use. */
        public ?string $layoutTemplateType = null
    ) {}
}
