<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningProvider
 */
class LearningProvider
{
    /**
     * The display name that appears in Viva Learning. Required.
     */
    private ?string $displayName;

    /**
     * Indicates whether a provider can ingest learning course activity records. The default value is false. Set to true to make learningCourseActivities available for this provider.
     */
    private ?bool $isCourseActivitySyncEnabled;

    /**
     * Authentication URL to access the courses for the provider. Optional.
     */
    private ?string $loginWebUrl;

    /**
     * The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     */
    private ?string $longLogoWebUrlForDarkTheme;

    /**
     * The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     */
    private ?string $longLogoWebUrlForLightTheme;

    /**
     * The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     */
    private ?string $squareLogoWebUrlForDarkTheme;

    /**
     * The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
     */
    private ?string $squareLogoWebUrlForLightTheme;

    /**
     * Learning catalog items for the provider.
     */
    private array $learningContents = [];

    /**
     */
    private ?string $learningCourseActivities;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsCourseActivitySyncEnabled(): ?bool
    {
        return $this->isCourseActivitySyncEnabled;
    }

    public function setIsCourseActivitySyncEnabled(?bool $isCourseActivitySyncEnabled): self
    {
        $this->isCourseActivitySyncEnabled = $isCourseActivitySyncEnabled;
        return $this;
    }

    public function getLoginWebUrl(): ?string
    {
        return $this->loginWebUrl;
    }

    public function setLoginWebUrl(?string $loginWebUrl): self
    {
        $this->loginWebUrl = $loginWebUrl;
        return $this;
    }

    public function getLongLogoWebUrlForDarkTheme(): ?string
    {
        return $this->longLogoWebUrlForDarkTheme;
    }

    public function setLongLogoWebUrlForDarkTheme(?string $longLogoWebUrlForDarkTheme): self
    {
        $this->longLogoWebUrlForDarkTheme = $longLogoWebUrlForDarkTheme;
        return $this;
    }

    public function getLongLogoWebUrlForLightTheme(): ?string
    {
        return $this->longLogoWebUrlForLightTheme;
    }

    public function setLongLogoWebUrlForLightTheme(?string $longLogoWebUrlForLightTheme): self
    {
        $this->longLogoWebUrlForLightTheme = $longLogoWebUrlForLightTheme;
        return $this;
    }

    public function getSquareLogoWebUrlForDarkTheme(): ?string
    {
        return $this->squareLogoWebUrlForDarkTheme;
    }

    public function setSquareLogoWebUrlForDarkTheme(?string $squareLogoWebUrlForDarkTheme): self
    {
        $this->squareLogoWebUrlForDarkTheme = $squareLogoWebUrlForDarkTheme;
        return $this;
    }

    public function getSquareLogoWebUrlForLightTheme(): ?string
    {
        return $this->squareLogoWebUrlForLightTheme;
    }

    public function setSquareLogoWebUrlForLightTheme(?string $squareLogoWebUrlForLightTheme): self
    {
        $this->squareLogoWebUrlForLightTheme = $squareLogoWebUrlForLightTheme;
        return $this;
    }

    public function getLearningContents(): array
    {
        return $this->learningContents;
    }

    public function setLearningContents(array $learningContents): self
    {
        $this->learningContents = $learningContents;
        return $this;
    }

    public function getLearningCourseActivities(): ?string
    {
        return $this->learningCourseActivities;
    }

    public function setLearningCourseActivities(?string $learningCourseActivities): self
    {
        $this->learningCourseActivities = $learningCourseActivities;
        return $this;
    }

}
