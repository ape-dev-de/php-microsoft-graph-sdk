<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppDefinition
 */
class TeamsAppDefinition
{
    /**
     * Authorization requirements specified in the Teams app manifest.
     */
    private ?string $authorization;

    /**
     */
    private ?string $createdBy;

    /**
     * Verbose description of the application.
     */
    private ?string $description;

    /**
     * The name of the app provided by the app developer.
     */
    private ?string $displayName;

    /**
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The published status of a specific version of a Teams app. Possible values are:submitted—The specific version of the Teams app was submitted and is under review.published—The request to publish the specific version of the Teams app was approved by the admin and the app is published.rejected—The admin rejected the request to publish the specific version of the Teams app.
     */
    private ?string $publishingState;

    /**
     * Short description of the application.
     */
    private ?string $shortDescription;

    /**
     * The ID from the Teams app manifest.
     */
    private ?string $teamsAppId;

    /**
     * The version number of the application.
     */
    private ?string $version;

    /**
     * The details of the bot specified in the Teams app manifest.
     */
    private ?string $bot;

    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }

    public function setAuthorization(?string $authorization): self
    {
        $this->authorization = $authorization;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getPublishingState(): ?string
    {
        return $this->publishingState;
    }

    public function setPublishingState(?string $publishingState): self
    {
        $this->publishingState = $publishingState;
        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    public function getTeamsAppId(): ?string
    {
        return $this->teamsAppId;
    }

    public function setTeamsAppId(?string $teamsAppId): self
    {
        $this->teamsAppId = $teamsAppId;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getBot(): ?string
    {
        return $this->bot;
    }

    public function setBot(?string $bot): self
    {
        $this->bot = $bot;
        return $this;
    }

}
