<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OptionalClaim
 */
class OptionalClaim
{
    public function __construct(
        /** @var string[] Additional properties of the claim. If a property exists in this collection, it modifies the behavior of the optional claim specified in the name property. */
        public array $additionalProperties = [],
        /** If the value is true, the claim specified by the client is necessary to ensure a smooth authorization experience for the specific task requested by the end user. The default value is false. */
        public ?bool $essential = null,
        /** The name of the optional claim. */
        public ?string $name = null,
        /** The source (directory object) of the claim. There are predefined claims and user-defined claims from extension properties. If the source value is null, the claim is a predefined optional claim. If the source value is user, the value in the name property is the extension property from the user object. */
        public ?string $source = null
    ) {}
}
