<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationTeamsAppResource resources
 *
 * Available select fields:
 * - appIconWebUrl
 * - appId
 * - teamsEmbeddedContentUrl
 * - webUrl
 */
class EducationTeamsAppResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationTeamsAppResource
     */
    public const FIELD_APP_ICON_WEB_URL = 'appIconWebUrl';
    public const FIELD_APP_ID = 'appId';
    public const FIELD_TEAMS_EMBEDDED_CONTENT_URL = 'teamsEmbeddedContentUrl';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific EducationTeamsAppResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
