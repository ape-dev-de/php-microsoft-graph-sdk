<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswerChoice
 */
class AccessPackageAnswerChoice
{
    public function __construct(
        /** The actual value of the selected choice. This is typically a string value which is understandable by applications. Required. */
        public ?string $actualValue = null,
        /** The text of the answer choice represented in a format for a specific locale. */
        public array $localizations = [],
        /** The string to display for this answer; if an Accept-Language header is provided, and there is a matching localization in localizations, this string will be the matching localized string; otherwise, this string remains as the default non-localized string. Required. */
        public ?string $text = null
    ) {}
}
