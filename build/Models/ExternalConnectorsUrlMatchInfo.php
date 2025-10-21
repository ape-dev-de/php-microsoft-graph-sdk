<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsUrlMatchInfo
 */
class ExternalConnectorsUrlMatchInfo
{
    public function __construct(
        /** @var string[] A list of the URL prefixes that must match URLs to be processed by this URL-to-item-resolver. */
        public array $baseUrls = [],
        /** A regular expression that will be matched towards the URL that is processed by this URL-to-item-resolver. The ECMAScript specification for regular expressions (ECMA-262) is used for the evaluation. The named groups defined by the regular expression will be used later to extract values from the URL. */
        public ?string $urlPattern = null
    ) {}
}
