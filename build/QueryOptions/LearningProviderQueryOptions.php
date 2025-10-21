<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningProvider resources
 *
 * Available select fields:
 * - displayName
 * - isCourseActivitySyncEnabled
 * - loginWebUrl
 * - longLogoWebUrlForDarkTheme
 * - longLogoWebUrlForLightTheme
 * - squareLogoWebUrlForDarkTheme
 * - squareLogoWebUrlForLightTheme
 * - learningContents
 * - learningCourseActivities
 */
class LearningProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LearningProvider
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_COURSE_ACTIVITY_SYNC_ENABLED = 'isCourseActivitySyncEnabled';
    public const FIELD_LOGIN_WEB_URL = 'loginWebUrl';
    public const FIELD_LONG_LOGO_WEB_URL_FOR_DARK_THEME = 'longLogoWebUrlForDarkTheme';
    public const FIELD_LONG_LOGO_WEB_URL_FOR_LIGHT_THEME = 'longLogoWebUrlForLightTheme';
    public const FIELD_SQUARE_LOGO_WEB_URL_FOR_DARK_THEME = 'squareLogoWebUrlForDarkTheme';
    public const FIELD_SQUARE_LOGO_WEB_URL_FOR_LIGHT_THEME = 'squareLogoWebUrlForLightTheme';
    public const FIELD_LEARNING_CONTENTS = 'learningContents';
    public const FIELD_LEARNING_COURSE_ACTIVITIES = 'learningCourseActivities';

    /**
     * Select specific LearningProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
