<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivacyProfile
 */
class PrivacyProfile
{
    public function __construct(
        /** A valid smtp email address for the privacy statement contact. Not required. */
        public ?string $contactEmail = null,
        /** A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required. */
        public ?string $statementUrl = null
    ) {}
}
