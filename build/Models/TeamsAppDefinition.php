<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppDefinition
 */
class TeamsAppDefinition
{
    public function __construct(
        /** Authorization requirements specified in the Teams app manifest. */
        public ?string $authorization = null,
        /**  */
        public ?string $createdBy = null,
        /** Verbose description of the application. */
        public ?string $description = null,
        /** The name of the app provided by the app developer. */
        public ?string $displayName = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The published status of a specific version of a Teams app. Possible values are:submitted—The specific version of the Teams app was submitted and is under review.published—The request to publish the specific version of the Teams app was approved by the admin and the app is published.rejected—The admin rejected the request to publish the specific version of the Teams app. */
        public ?string $publishingState = null,
        /** Short description of the application. */
        public ?string $shortDescription = null,
        /** The ID from the Teams app manifest. */
        public ?string $teamsAppId = null,
        /** The version number of the application. */
        public ?string $version = null,
        /** The details of the bot specified in the Teams app manifest. */
        public ?string $bot = null
    ) {}
}
