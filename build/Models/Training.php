<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Training
 */
class Training
{
    public function __construct(
        /** Training availability status. Possible values are: unknown, notAvailable, available, archive, delete, unknownFutureValue. */
        public ?string $availabilityStatus = null,
        /** Identity of the user who created the training. */
        public ?string $createdBy = null,
        /** Date and time when the training was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description for the training. */
        public ?string $description = null,
        /** The display name for the training. */
        public ?string $displayName = null,
        /** Training duration. */
        public ?float $durationInMinutes = null,
        /** Indicates whether the training has any evaluation. */
        public ?bool $hasEvaluation = null,
        /** Identity of the user who last modified the training. */
        public ?string $lastModifiedBy = null,
        /** Date and time when the training was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Training content source. Possible values are: unknown, global, tenant, unknownFutureValue. */
        public ?string $source = null,
        /** @var string[] Supported locales for content for the associated training. */
        public array $supportedLocales = [],
        /** @var string[] Training tags. */
        public array $tags = [],
        /** The type of training. Possible values are: unknown, phishing, unknownFutureValue. */
        public ?string $type = null,
        /** @var string[] Language specific details on a training. */
        public array $languageDetails = []
    ) {}
}
