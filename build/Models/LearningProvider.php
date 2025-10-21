<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningProvider
 */
class LearningProvider
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name that appears in Viva Learning. Required. */
        public ?string $displayName = null,
        /** Indicates whether a provider can ingest learning course activity records. The default value is false. Set to true to make learningCourseActivities available for this provider. */
        public ?bool $isCourseActivitySyncEnabled = null,
        /** Authentication URL to access the courses for the provider. Optional. */
        public ?string $loginWebUrl = null,
        /** The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
        public ?string $longLogoWebUrlForDarkTheme = null,
        /** The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
        public ?string $longLogoWebUrlForLightTheme = null,
        /** The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
        public ?string $squareLogoWebUrlForDarkTheme = null,
        /** The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
        public ?string $squareLogoWebUrlForLightTheme = null,
        /** Learning catalog items for the provider. */
        public array $learningContents = [],
        /**  */
        public array $learningCourseActivities = []
    ) {}
}
