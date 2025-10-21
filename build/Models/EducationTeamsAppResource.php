<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTeamsAppResource
 */
class EducationTeamsAppResource
{
    public function __construct(
        /** URL that points to the icon of the app. */
        public ?string $appIconWebUrl = null,
        /** Teams app ID of the application. */
        public ?string $appId = null,
        /** URL for the app resource that will be opened by Teams. */
        public ?string $teamsEmbeddedContentUrl = null,
        /** URL for the app resource that can be opened in the browser. */
        public ?string $webUrl = null
    ) {}
}
