<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningProvider
 */
class LearningProvider
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name that appears in Viva Learning. Required. */
    public ?string $displayName = null;

    /** Indicates whether a provider can ingest learning course activity records. The default value is false. Set to true to make learningCourseActivities available for this provider. */
    public ?bool $isCourseActivitySyncEnabled = null;

    /** Authentication URL to access the courses for the provider. Optional. */
    public ?string $loginWebUrl = null;

    /** The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
    public ?string $longLogoWebUrlForDarkTheme = null;

    /** The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
    public ?string $longLogoWebUrlForLightTheme = null;

    /** The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
    public ?string $squareLogoWebUrlForDarkTheme = null;

    /** The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required. */
    public ?string $squareLogoWebUrlForLightTheme = null;

    /** 
     * Learning catalog items for the provider.
     * @var LearningContent[]
     */
    public array $learningContents = [];

    /** 
     * 
     * @var LearningCourseActivity[]
     */
    public array $learningCourseActivities = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isCourseActivitySyncEnabled'])) {
            $this->isCourseActivitySyncEnabled = $data['isCourseActivitySyncEnabled'];
        }
        if (isset($data['loginWebUrl'])) {
            $this->loginWebUrl = $data['loginWebUrl'];
        }
        if (isset($data['longLogoWebUrlForDarkTheme'])) {
            $this->longLogoWebUrlForDarkTheme = $data['longLogoWebUrlForDarkTheme'];
        }
        if (isset($data['longLogoWebUrlForLightTheme'])) {
            $this->longLogoWebUrlForLightTheme = $data['longLogoWebUrlForLightTheme'];
        }
        if (isset($data['squareLogoWebUrlForDarkTheme'])) {
            $this->squareLogoWebUrlForDarkTheme = $data['squareLogoWebUrlForDarkTheme'];
        }
        if (isset($data['squareLogoWebUrlForLightTheme'])) {
            $this->squareLogoWebUrlForLightTheme = $data['squareLogoWebUrlForLightTheme'];
        }
        if (isset($data['learningContents'])) {
            $this->learningContents = $data['learningContents'];
        }
        if (isset($data['learningCourseActivities'])) {
            $this->learningCourseActivities = $data['learningCourseActivities'];
        }
    }
}
