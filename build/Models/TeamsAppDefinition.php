<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppDefinition
 */
class TeamsAppDefinition
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Authorization requirements specified in the Teams app manifest.
     * @var TeamsAppAuthorization|\stdClass|null
     */
    public mixed $authorization = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Verbose description of the application. */
    public ?string $description = null;

    /** The name of the app provided by the app developer. */
    public ?string $displayName = null;

    /**  */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The published status of a specific version of a Teams app. Possible values are:submitted—The specific version of the Teams app was submitted and is under review.published—The request to publish the specific version of the Teams app was approved by the admin and the app is published.rejected—The admin rejected the request to publish the specific version of the Teams app.
     * @var TeamsAppPublishingState|\stdClass|null
     */
    public mixed $publishingState = null;

    /** Short description of the application. */
    public ?string $shortDescription = null;

    /** The ID from the Teams app manifest. */
    public ?string $teamsAppId = null;

    /** The version number of the application. */
    public ?string $version = null;

    /** 
     * The details of the bot specified in the Teams app manifest.
     * @var TeamworkBot|\stdClass|null
     */
    public mixed $bot = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authorization'])) {
            $this->authorization = is_array($data['authorization']) ? new TeamsAppAuthorization($data['authorization']) : $data['authorization'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['publishingState'])) {
            $this->publishingState = is_array($data['publishingState']) ? new TeamsAppPublishingState($data['publishingState']) : $data['publishingState'];
        }
        if (isset($data['shortDescription'])) {
            $this->shortDescription = $data['shortDescription'];
        }
        if (isset($data['teamsAppId'])) {
            $this->teamsAppId = $data['teamsAppId'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['bot'])) {
            $this->bot = is_array($data['bot']) ? new TeamworkBot($data['bot']) : $data['bot'];
        }
    }
}
