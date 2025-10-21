<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAnswerVariant
 */
class SearchAnswerVariant
{
    public function __construct(
        /** The answer variation description that is shown on the search results page. */
        public ?string $description = null,
        /** The answer variation name that is displayed in search results. */
        public ?string $displayName = null,
        /** The country or region that can view this answer variation. */
        public ?string $languageTag = null,
        /** The device or operating system that can view this answer variation. Possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue. */
        public ?string $platform = null,
        /** The URL link for the answer variation. When users select this answer variation from the search results, they''re directed to the specified URL. */
        public ?string $webUrl = null
    ) {}
}
