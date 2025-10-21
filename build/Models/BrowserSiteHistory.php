<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteHistory
 */
class BrowserSiteHistory
{
    public function __construct(
        /** Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain. */
        public ?bool $allowRedirect = null,
        /** The comment for the site. */
        public ?string $comment = null,
        /** Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue. */
        public ?string $compatibilityMode = null,
        /** The user who last modified the site. */
        public ?string $lastModifiedBy = null,
        /** The merge type of the site. The possible values are: noMerge, default, unknownFutureValue. */
        public ?string $mergeType = null,
        /** The date and time when the site was last published. */
        public ?\DateTimeInterface $publishedDateTime = null,
        /** The target environment that the site should open in. The possible values are: internetExplorerMode, internetExplorer11, microsoftEdge, configurable, none, unknownFutureValue.Prior to June 15, 2022, the internetExplorer11 option would allow opening a site in the Internet Explorer 11 (IE11) desktop application. Following the retirement of IE11 on June 15, 2022, the internetExplorer11 option will no longer open an IE11 window and will instead behave the same as the internetExplorerMode option. */
        public ?string $targetEnvironment = null
    ) {}
}
