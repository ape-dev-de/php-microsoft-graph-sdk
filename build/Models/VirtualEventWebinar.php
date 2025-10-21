<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventWebinar
 */
class VirtualEventWebinar
{
    public function __construct(
        /** To whom the webinar is visible. Possible values are: everyone, organization, and unknownFutureValue. */
        public ?string $audience = null,
        /** Identity information of coorganizers of the webinar. */
        public array $coOrganizers = [],
        /** Registration configuration of the webinar. */
        public ?string $registrationConfiguration = null,
        /** @var string[] Registration records of the webinar. */
        public array $registrations = []
    ) {}
}
