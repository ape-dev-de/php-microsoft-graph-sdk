<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSet
 */
class DocumentSet
{
    public function __construct(
        /** Content types allowed in document set. */
        public array $allowedContentTypes = [],
        /** Default contents of document set. */
        public array $defaultContents = [],
        /** Specifies whether to push welcome page changes to inherited content types. */
        public ?bool $propagateWelcomePageChanges = null,
        /** Indicates whether to add the name of the document set to each file name. */
        public ?bool $shouldPrefixNameToFile = null,
        /** Welcome page absolute URL. */
        public ?string $welcomePageUrl = null,
        /**  */
        public array $sharedColumns = [],
        /**  */
        public array $welcomePageColumns = []
    ) {}
}
